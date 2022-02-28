<?php

class Example
{
    private string $name;
    private int $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$example = new Example(age: 26, name: 'Gustavo');
echo 'name: '.$example->getName()."\n\n";
echo 'age: '.$example->getAge()."\n\n";