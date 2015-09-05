<?php

function helloWorld()
{
    print func_num_args() . PHP_EOL;
}

helloWorld(); //0
helloWorld('marabesi'); //1
helloWorld('matheus', 'marabesi'); //2