<?php

function helloWorld()
{
    print func_num_args() . PHP_EOL;
}

helloWorld(); //0
helloWorld('marabesi'); //1
helloWorld('matheus', 'marabesi'); //2

function sum()
{
    $argumentos = func_num_args();

    if ($argumentos > 2) {
        throw new \InvalidArgumentException();
    }
}

sum(1, 2, 3); //exception