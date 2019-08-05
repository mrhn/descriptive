<?php namespace Descriptive\Models;

use Symfony\Component\Yaml\Yaml;

class Api
{
    public const VERSION = '3.0.0';

    /** @var string */
    public $title;

    /** @var string */
    public $version;

    /** @var Route[] */
    public $routes;

    /**
     * Api constructor.
     *
     * @param Route[] $routes
     */
    public function __construct(string $title, string $version, array $routes)
    {
        $this->title   = $title;
        $this->version = $version;
        $this->routes  = $routes;
    }

    public function toArray(): array
    {
        return [
            'openapi' => static::VERSION,
            'info'    => [
                'title'   => $this->title,
                'version' => $this->version,
            ],
            'paths' => array_reduce($this->routes, function (array $carry, Route $route): array {
                $carry[$route->path] = $route->toArray();

                return $carry;
            }, []),
        ];
    }

    public function toYaml(): string
    {
        return Yaml::dump($this->toArray(), 256, 2, Yaml::DUMP_OBJECT_AS_MAP);
    }
}
