<?php namespace Descriptive\Models;

class Route
{
    /** @var string */
    public $id;

    /** @var string */
    public $summary;

    /** @var string */
    public $path;

    /** @var string */
    public $method;

    /** @var Request|null */
    public $request;

    /** @var Response[] */
    public $responses;

    /**
     * Route constructor.
     *
     * @param Response[] $responses
     */
    public function __construct(string $id, string $summary, string $path, string $method, ?Request $request, array $responses)
    {
        $this->id        = $id;
        $this->summary   = $summary;
        $this->path      = $path;
        $this->method    = $method;
        $this->request   = $request;
        $this->responses = $responses;
    }

    public function toArray(): array
    {
        return [
            $this->method => [
                'operationId' => $this->id,
                'summary'     => $this->summary,
                'responses'   => array_reduce($this->responses, function (array $carry, Response $response): array {
                    $carry[$response->status] = $response->toArray();

                    return $carry;
                }, []),
            ],
        ];
    }
}
