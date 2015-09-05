<?php

final class NoExtends {}

// will rise an fatal error (final class)
//class TryToExtends extends NoExtends {}

class Car
{
    final public function numbersOfWheels()
    {
        return 4;
    }
}

class Toyota extends Car {}

print (new Toyota())->numbersOfWheels(); //4