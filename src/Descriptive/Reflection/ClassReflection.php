<?php namespace Mrhn\Descriptive\Reflection;

use PhpDocReader\PhpDocReader;
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

    public function getFileName(): string
    {
        return $this->reflectionClass->getFileName();
    }

    public function getMethod(string $name): ReflectionMethod
    {
        return $this->reflectionClass->getMethod($name);
    }

    public function getProperty(string $name): PropertyReflection
    {
        $property = $this->reflectionClass->getProperty($name);

        return new PropertyReflection($property);
    }

    public function getPropertyType(string $name): PropertyReflection
    {
        $reader = new PhpDocReader();

        return $reader->getPropertyTypeOptimistic($this->reflectionClass, $name);
    }

    public function getDocComment(): string
    {
        return $this->reflectionClass->getDocComment();
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

    public function toInstance()
    {
        return $this->reflectionClass->newInstance();
    }
}
