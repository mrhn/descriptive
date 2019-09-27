<?php


namespace Mrhn\Descriptive\Reflection\Types;


use Mrhn\Descriptive\Reflection\ClassReflection;

class ClassType extends Type
{
    public $name;

    public $class;

    public function __construct($name, $class)
    {
        $this->name = $name;
        $this->class = $class;
    }

    public function resolve()
    {
        $transformInput = ClassReflection::resolve($this->name);

        $classDocBlock = $transformInput->getDocComment();

        $docLines = explode("\n", $classDocBlock);
        $scopedParameters = [];
        foreach ($docLines as $line) {
            if (Str::contains($line, '$')) {
                $parameterName = $this->stringBetween($line, '$','');
                $parameterType = $this->stringBetween($line, '@property', '$');

                $classReflection = ClassReflection::resolve($this->class);
                $parameterType = $classReflection->getPropertyType($parameterName);

                if (in_array($parameterType, ['int', 'string', 'float', 'array'])) {
                    $parameterClass = new ScalarType($parameterType);
                } else {
                    $parameterClass = new ClassType($parameterName, $this->class);
                }
                $scopedParameters[$parameterName] = $parameterClass;
            }
        }
    }
}
