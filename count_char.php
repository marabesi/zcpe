<?php

$str = 'Matheus Marabesi Pereira';

var_export(count_chars($str, 0)); //an array with byte-value and the frequency of every byte as value (0 => 255)

echo PHP_EOL;

var_export(count_chars($str, 1)); //list where the key is ascii and the number of occurences used as value

echo PHP_EOL;

var_export(count_chars($str, 2)); //list of bytes not used, equals to 0

echo PHP_EOL;

var_export(count_chars($str, 3)); //list of different strings used

echo PHP_EOL;

var_export(count_chars($str, 4)); //unused strings

echo PHP_EOL;
