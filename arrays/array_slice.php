<?php

$myArray = [
    'm',
    'a',
    'r',
    'a',
    'b',
    'e',
    's',
    'i'
];

print_r($myArray);

print_r(array_slice($myArray, 2)); // rabesi
print_r(array_slice($myArray, 2, 2)); // ra
print_r(array_slice($myArray, -2, 2)); // si
print_r(array_slice($myArray, -2, 2, true)); // 6 => s, 7 => i

$a = [1, 2, 3, 4, 5];

print_r(array_slice($a, -3)); //234