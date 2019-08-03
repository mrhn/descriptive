<?php

namespace Descriptive\Models;

class Response
{
    /** @var int */
    public $status;

    /** @var string */
    public $description;

    public function toArray(): array
    {
        return [
            'description' => $this->description,
            'application/json' => [
                'examples' => [

                ]
            ]
        ];
    }
}
