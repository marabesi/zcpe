<?php

$str = 'matheus';

for ( $i = 0; $i < strlen($str); $i++ )
{
    echo $str[$i] . ' => ' . ord($str[$i]) . PHP_EOL;
}

echo PHP_EOL;

echo ord($str); // m