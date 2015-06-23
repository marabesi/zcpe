<?php

$str = 'abcdef';

print substr_count($str, 'a'); // 1

print PHP_EOL;

print substr_count($str, 'abcd', 0, 1); //0