<?php

$texto = '!Vamos aplicar uma expressão aqui!';

$total = 0;

preg_replace('/!/', '', $texto, -1, $total);

print $total;