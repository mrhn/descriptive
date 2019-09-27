<?php namespace Mrhn\Descriptive\Console;

use Illuminate\Console\Command;
use Illuminate\Routing\RouteCollection;
use Illuminate\Routing\Router;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Mrhn\Descriptive\Models\Api;
use Mrhn\Descriptive\Models\Response;
use Mrhn\Descriptive\Models\Route;
use Mrhn\Descriptive\Reflection\ClassReflection;
use Mrhn\Descriptive\Reflection\Types\ClassType;
use Mrhn\Descriptive\Reflection\Types\ScalarType;
use PhpDocReader\PhpDocReader;
use PhpParser\Node\Expr\Array_;
use PhpParser\Node\Identifier;
use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\Property;
use PhpParser\Node\Stmt\Use_;
use PhpParser\Node\VarLikeIdentifier;
use PhpParser\ParserFactory;
use PHPStan\Analyser\Scope;
use PHPStan\Analyser\ScopeFactory;
use PHPStan\Broker\Broker;
use PHPStan\Broker\BrokerFactory;
use PHPStan\DependencyInjection\ContainerFactory;
use PHPStan\PhpDoc\PhpDocBlock;
use PHPStan\Reflection\Php\PhpClassReflectionExtension;
use PHPStan\Reflection\Php\PhpParameterReflection;
use PHPStan\Type\ObjectType;

class DescriptiveCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'descriptive:openapi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate an OpenAPI (Swagger) documentation.';

    /**
     * Execute the console command.
     */
    public function handle(Router $router): int
    {
        $routingRoutes = $router->getRoutes();
        if (!count($routingRoutes)) {
            $this->error("Your application doesn't have any routes.");

            return 1;
        }

        $routes = $this->mapRoutes($routingRoutes);

        $api = new Api(config('app.name', ''), config('app.version', '0.0.0'), $routes);

        $this->line($api->toYaml());

        return 0;
    }

    /**
     * @return Route[]
     */
    private function mapRoutes(RouteCollection $routingRoutes): array
    {
        $routes = [];

        /** @var \Illuminate\Routing\Route $route */
        foreach ($routingRoutes as $route) {

            $modelSchema = $this->guessModelSchema($route);

            $path = '/' . ltrim($route->uri(), '/');
            $summary = ltrim($route->getActionName(), '\\');
            if ($route->getName()) {
                $summary = $route->getName() . ' (' . $summary . ')';
            }

            foreach ($route->methods() as $method) {
                if ($method === 'HEAD') {
                    continue ;
                }

                $routes[] = new Route(
                    $path . '::' . $method,
                    $summary,
                    $path,
                    mb_strtolower($method),
                    null,
                    [new Response(200, '', $modelSchema)]
                );
            }
        }

        return $routes;
    }

    private function guessModelSchema(\Illuminate\Routing\Route $route)
    {

        $controllerClass = ClassReflection::resolve(explode('@', $route->action['controller'])[0]);

        $transformer = $controllerClass->getProperty('transformer');

        $transformerClass = $transformer->getType();
        $transformer = ClassReflection::resolve($transformerClass);

        $transform = $transformer->getMethod('transform');
        $parameter = $transform->getParameters()[0];

        $reader = new PhpDocReader();

        $parameterClass = $reader->getParameterClass($parameter);

        $scopedParameters = [
            $parameter->getName() => new ClassType($parameter->getName(), $transformerClass)
        ];

        try
        {
            $parser = (new ParserFactory)->create(ParserFactory::PREFER_PHP7);
            $ast = $parser->parse(file_get_contents($transformer->getFileName()));

            $accesses = [];
            // find array items
            foreach ($ast[0] as $value) {
                if (is_array($value)) {
                    foreach ($value as $item) {
                        if ($item instanceof Class_) {
                            /** @var Array_ $array */
                            $array = $array = $item->stmts[0]->stmts[0]->expr;

                            foreach ($array->items as $item) {
                                $calls = [];
                                $access = $item->value;

                                while ($access->name instanceof Identifier) {
                                    $calls[] = $access->name->name;
                                    $access = $access->var;
                                }

                                $calls[] = $access->name;

                                $accesses[] = $calls;
                            }
                        }
                    }
                }
            }



        } catch (Error $error) {
            echo "Parse error: {$error->getMessage()}\n";
            return [];
        }

        foreach ($accesses as $access) {
            $parameterName = array_pop($access);
            $parameterAccesses = array_reverse($access);

            $tmpAccess = $scopedParameters;

            foreach ($parameterAccesses as $access) {
                $tmpAccess = $tmpAccess[$access];
                if ($tmpAccess instanceof ScalarType) {
                    $tmpAccess = (string) $tmpAccess;
                }

                if ($tmpAccess instanceof ClassType) {
                    $tmpAccess = $tmpAccess->resolve();
                }
            }

            $schemaMap[$parameterName] = $tmpAccess;
        }

        return $schemaMap;
    }


    private function stringBetween(
        $string,
        $start,
        $end
    ) {
        $sp = strpos($string, $start) + strlen($start);
        if (empty($end)) {
            $ep = strlen($string);
        } else {
            $ep = strpos($string, $end) - $sp;
        }

        $data = trim(substr($string, $sp, $ep));
        return trim($data);
    }
}
