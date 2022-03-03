<?php

class Cellphone
{
    public $number;

    public function __construct($number)
    {
        $this->number = $number;
    }
}

class Person
{
    public $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class PersonRepository
{
    private WeakMap $person_cellphone;

    public function __construct(Person $person, Cellphone $cellphone)
    {
        $this->person_cellphone = new WeakMap();
        $this->person_cellphone[$person] = $cellphone;
    }

    // public function getCellphone(Person $person)
    // {
    //     return $this->person_cellphone->offsetGet($person);
    // }

    public function getCellphone()
    {
        return $this->person_cellphone->getIterator();
    }
}

$person = new Person('Gustavo');
$cellphone = new Cellphone('62984991224');
$repository = new PersonRepository($person, $cellphone);
// $personCellphone = $repository->getCellphone($person);

// var_dump($personCellphone);
unset($person); // when the person is deleted, its cellphone is also deleted

$list = $repository->getCellphone();
foreach($list as $item){
    var_dump($item);echo "\n\n";
}