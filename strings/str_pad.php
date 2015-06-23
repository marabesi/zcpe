<?php

$str = 123;
$length = 5;
$character = 0;

print str_pad($str, $length); //string(5) "123  "

print PHP_EOL;

print str_pad($str, $length, $character, STR_PAD_LEFT); //00123

print PHP_EOL;

print str_pad($str, $length, $character, STR_PAD_RIGHT); //12300

print PHP_EOL;

print str_pad($str, $length, $character, STR_PAD_BOTH); //01230
