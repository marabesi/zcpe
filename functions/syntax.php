<?php

function sum($a, $b)
{
    print $a + $b;
}

sum(10, 20);


function transformText($texto)
{
    return strtoupper($texto);
}

print transformText('Hello');

function addElement(array &$collection, $element = null)
{
    if ($element !== null)
    {
        $collection[] = $element;
    }
}

$fruits = [];

addElement($fruits);
addElement($fruits, 'watermelon');

print_r($fruits);

function exchangeCurrency($coin = 2, $value = 10)
{
    return $value * $coin;
}
print exchangeCurrency(2);

