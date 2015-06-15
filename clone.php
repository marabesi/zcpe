<?php

class Name {

  public $firstName;
  public $lastName;

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

if ($obj1 == $obj2) {
  echo 'true';
} else {
  echo 'false';
}

echo PHP_EOL;

var_export($obj1);
var_export($obj2);

echo PHP_EOL;
