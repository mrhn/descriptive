<?php

namespace Descriptive\Models;

class Route
{
    /** @var string */
    public $path;

    /** @var string */
    public $method;

    /** @var Request */
    public $request;

    /** @var Response[] */
    public $responses;

    /** @var string */
    public $id;

    /** @var string */
    public $summary;

    public function toArray(): array
    {
        return [
            $this->method => [
                'operationId' => $this->id,
                'summary' => $this->summary,
                'responses' => array_reduce($this->responses, function(array $carry, Response $response): array {
                    $carry[$response->status] = $response->toArray();

                    return $carry;
                }, []),
            ]
        ];
    }
}
