<?php

namespace Descriptive\Models;

class Api
{
    public const VERSION = '3.0.0';

    /** @var string */
    public $title;

    /** @var string */
    public $version;

    /** @var Route[] */
    public $routes = [];

    public function toArray(): array
    {
        return [
            'version' => static::VERSION,
            'info' => [
                'title' => $this->title,
                'version' => $this->version,
            ],
            'paths' => array_reduce($this->routes, function (array $carry, Route $route) {
                $carry[$route->path] = $route->toArray();

                return $carry;
            }, []),
        ];
    }

    public function toYaml(): string
    {
        return yaml_emit($this->toArray());
    }
}
