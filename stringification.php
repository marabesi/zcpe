<?php

class Person {}

$marabesi = new Person();
//print $marabesi; catchable fatal error

class PersonStringification
{
    public function __toString()
    {
        // must return a string otherwise will rise catchable fatal error
        return var_export($this, true); 
    }
}

$person = new PersonStringification();

print $person;

