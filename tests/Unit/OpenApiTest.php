<?php

namespace Tests\Unit;

use Descriptive\Models\Api;
use Descriptive\Models\Response;
use Descriptive\Models\Route;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;

class OpenApiTest extends TestCase
{
    /** @test */
    public function can_create_open_api_yaml()
    {
        $response = new Response(200, '');

        $routes = [];
        $routes[] = new Route('HelloWorld', 'First route', '/hello/world', 'get', null, [$response]);

        $api = new Api('Rest API', '1.0', $routes);

        $this->assertSame(file_get_contents('tests/Fixtures/api.yaml'), $api->toYaml());
    }
}
