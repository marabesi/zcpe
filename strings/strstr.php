<?php

$str = 'hello@world';

print strstr($str, '@'); //@world

print PHP_EOL;

print strstr($str, 'w'); //world

print PHP_EOL;

print strstr($str, '@', true); //hello

print PHP_EOL;

print strstr($str, 'w', true); //hello@

print PHP_EOL;