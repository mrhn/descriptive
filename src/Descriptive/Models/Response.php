<?php namespace Descriptive\Models;

class Response
{
    /** @var int */
    public $status;

    /** @var string */
    public $description;

    public function __construct(int $status, string $description)
    {
        $this->status      = $status;
        $this->description = $description;
    }

    public function toArray(): array
    {
        return [
            'description' => $this->description,
        ];
    }
}
