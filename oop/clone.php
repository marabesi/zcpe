<?php

class Name {
    public $firstName;
}

class Person {

 public $name;

 public function __construct() {
     $this->name = new Name();
 }

 public function __clone() {
     $this->name = clone $this->name;
 }
}

$obj1 = new Person();
$obj1->name->firstName = 'Maria';

$obj2 = clone $obj1;
$obj2->name->firstName = 'Joao';

var_dump($obj1 == $obj2);
var_dump($obj1->name);
var_dump($obj2->name);

echo PHP_EOL;
