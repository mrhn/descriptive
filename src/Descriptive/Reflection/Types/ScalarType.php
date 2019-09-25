<?php

namespace Mrhn\Descriptive\Reflection\Types;

class ScalarType extends Type
{
    /** @var string */
    public $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function __toString()
    {
        return $this->type;
    }
}
