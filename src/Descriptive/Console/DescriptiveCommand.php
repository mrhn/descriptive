<?php namespace Mrhn\Descriptive\Console;

use Illuminate\Console\Command;
use Illuminate\Routing\RouteCollection;
use Illuminate\Routing\Router;
use Mrhn\Descriptive\Models\Api;
use Mrhn\Descriptive\Models\Response;
use Mrhn\Descriptive\Models\Route;

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

        foreach ($routingRoutes as $route) {
            foreach ($route->methods() as $method) {
                $routes[] = new Route(
                    ltrim($route->getActionName(), '\\'),
                    $route->getName() ?? '',
                    $route->uri(),
                    mb_strtolower($method),
                    null,
                    [new Response(200, '')]
                );
            }
        }

        return $routes;
    }
}
