<?php namespace Mrhn\Descriptive\Reflections;

use ReflectionClass;
use ReflectionException;

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

    public function getProperty()
    {

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