<?php

abstract class Animal
{

    abstract function __construct($name);

}

class Dog extends Animal
{
    public function __construct($name) {
    }
}

$dog = new Dog('Bob');