<?php

/**
 * According to php documentation next next() return the next element apointed by internal pointer of an array
 */

$myArray = [
  'p',
  'h',
  'p',
  'z',
  'c',
  'e'
];

print current($myArray) . PHP_EOL; //p
print next($myArray)    . PHP_EOL; //h
print current($myArray) . PHP_EOL; //h
print reset($myArray)   . PHP_EOL; //p
print end($myArray)     . PHP_EOL; //e
print prev($myArray)    . PHP_EOL; //c
