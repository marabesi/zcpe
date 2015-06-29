<?php

class Car
{
    public function __isset($property)
    {
        print 'property ' . $property . ' exists ?' . PHP_EOL;
    }
}

$car = new Car();

print isset($car->window); // property window exists ?;

class Truck
{
    private $wheels; // __isset is called because $wheels is a private property
    
    public function __isset($property) {
        print "I'm using __isset" . PHP_EOL;
    }
}

$truck = new Truck();
isset($truck->wheels); // I'm using __isset