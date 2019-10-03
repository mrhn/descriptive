<?php


namespace Mrhn\Descriptive\Reflection\Types;


use Illuminate\Support\Str;
use Mrhn\Descriptive\Reflection\ClassReflection;
use PhpDocReader\PhpDocReader;

class ClassType extends Type
{
    public $name;

    public $class;

    public function __construct($class)
    {
        $this->class = $class;
    }

    public function resolve()
    {
        $transformInput = ClassReflection::resolve($this->class);

        $classDocBlock = $transformInput->getDocComment();

        $docLines = explode("\n", $classDocBlock);
        $scopedParameters = [];
        foreach ($docLines as $line) {
            if (Str::contains($line, '$')) {
                $matches = [];
                preg_match('/.+?\$([a-zA-Z]+)/', $line, $matches);
                $parameterName = $matches[1];
                //$parameterName = $this->stringBetween($line, '$',' ');
                $classReflection = ClassReflection::resolve($this->class);
                $parameterType = $classReflection->getPropertyType($parameterName);

                if (in_array($parameterType, ['int', 'string', 'float', 'array'])) {
                    $parameterClass = new ScalarType($parameterType);
                } else {
                    $parameterClass = new ClassType($parameterType);
                }

                $scopedParameters[$parameterName] = $parameterClass;
            }
        }

        return $scopedParameters;
    }


    private function stringBetween(
        $string,
        $start,
        $end
    ) {
        $sp = strpos($string, $start) + strlen($start);
        if (empty($end)) {
            $ep = strlen($string);
        } else {
            $ep = strpos($string, $end) - $sp;
        }

        $data = trim(substr($string, $sp, $ep));
        return trim($data);
    }
}
