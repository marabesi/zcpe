<?php

$cars = [
    'toyota',
    'nissan',
    'ford',
    'RR',
];

function print_array_value($element, $key, $userdata)
{
    $element = $element . $key;
    
    print $key . ' ' . $element . ' ' . $userdata . PHP_EOL;
}

array_walk($cars, 'print_array_value', 'my user data');

function print_array($element, $key, $userdata)
{
    $element = $element . $key;
    
    print $key . ' ' . $element . ' ' . $userdata . PHP_EOL;
}

array_walk($cars, 'print_array', 'my user data');