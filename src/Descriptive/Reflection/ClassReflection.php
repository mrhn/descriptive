<?php namespace Mrhn\Descriptive\Reflections;

use ReflectionClass;
use ReflectionException;
use ReflectionProperty;
use ReflectionMethod;

class ClassReflection
{
    /**
     * @var ReflectionClass
     */
    private $reflectionClass;

    public function __construct(ReflectionClass $class)
    {
        $this->reflectionClass = $class;
    }

    public function hasProperty()
    {

    }

    public function getMethod(string $name): ReflectionMethod
    {
        return $this->reflectionClass->getMethod('transform');
    }

    public function getProperty(string $name): ReflectionProperty
    {
        return $this->reflectionClass->getProperty($name);
    }

    public static function resolve(string $class): ?self
    {
        $reflectionClass = null;

        try {
            $reflectionClass = new ReflectionClass($class);
        } catch (ReflectionException $exception) {
            return null;
        }


        return new static($reflectionClass);
    }
}
