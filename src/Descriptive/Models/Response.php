<?php namespace Mrhn\Descriptive\Models;

class Response
{
    /** @var int */
    public $status;

    /** @var string */
    public $description;

    /** @var array */
    public $properties;

    public function __construct(int $status, string $description, array $properties)
    {
        $this->status      = $status;
        $this->description = $description;
        $this->properties = $properties;
    }

    public function toArray(): array
    {
        $propertiesOpenApi = [];

        foreach ($this->properties as $key => $value) {
            $propertiesOpenApi[$key] = [
                'type' => $this->typeToOpenApi($value),
                'description' => '',
            ];
        }

        return [
            'description' => $this->description,
            'content' => [
                'application/json' => [
                    'schema' => [
                        'properties' => $propertiesOpenApi
                    ],
                ],
            ],
        ];
    }

    private function typeToOpenApi(string $type)
    {
        if ($type === 'float') {
            return 'number';
        }

        if ($type === 'int') {
            return 'integer';
        }

        return $type;
    }
}
