<?php namespace Tests\Unit;

use Mrhn\Descriptive\Models\Api;
use Mrhn\Descriptive\Models\Response;
use Mrhn\Descriptive\Models\Route;
use PHPUnit\Framework\TestCase;

class OpenApiTest extends TestCase
{
    /** @test */
    public function can_create_open_api_yaml(): void
    {
        $response = new Response(200, '');
        $routes   = [];
        $routes[] = new Route('HelloWorld', 'First route', '/hello/world', 'get', null, [$response]);

        $api = new Api('Rest API', '1.0', $routes);

        $this->assertSame(file_get_contents('tests/Fixtures/api.yaml'), $api->toYaml());
    }
}
