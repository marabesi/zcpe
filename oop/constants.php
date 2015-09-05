<?php

class Math
{
    const pi = 3.14;
}

$class = 'Math';

// To use variables instead of class names in left hand is allowed to PHP 5.3 +
print $class::pi; //3.14

print PHP_EOL;

print Math::pi; //3.14

print PHP_EOL;

/*class Php56
{
    const SUM = 2 * 2 * 2; // allowed in php 5.6 +
}*/