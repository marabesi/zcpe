<?php

function somar()
{
    $argumentos = func_num_args();

    if ($argumentos > 2) {
        throw new \InvalidArgumentException();
    }

    $a = func_get_arg(0);
    $b = func_get_arg(1);

    print $a + $b;
}

somar(10);