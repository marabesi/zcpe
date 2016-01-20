<?php

abstract class Animal
{

    abstract function __construct($name); // you can force a abstract constructor

}

class Dog extends Animal
{
    public function __construct($name)
    {
    }
}

$dog = new Dog('Bob');
