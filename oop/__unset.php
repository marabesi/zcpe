<?php

/**
 * __unset is called when unset() is called for a undefined or
 * unaccessible property in a class.
 */
class Foo
{
    public function __unset($property)
    {
        print "I'm calling __unset" . PHP_EOL;
    }
}

$foo = new Foo();
unset($foo->bar); //I'm calling __unset