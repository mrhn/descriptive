<?php namespace Mrhn\Descriptive\Reflection;

use Mrhn\Descriptive\Reflection\Types\Type;
use PhpDocReader\PhpDocReader;
use ReflectionProperty;

class PropertyReflection
{
    /**
     * @var ReflectionProperty
     */
    private $reflectionProperty;

    public function __construct(ReflectionProperty $property)
    {
        $this->reflectionProperty = $property;
    }

    public function getType(): string
    {
        $reader = new PhpDocReader();

        return $reader->getPropertyClass($this->reflectionProperty);
    }
}
