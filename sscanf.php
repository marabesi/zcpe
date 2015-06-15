<?php

//basic usage
$str = 'June 2000 19';
$array = sscanf($str, '%s %d %d');

print $str;

print PHP_EOL;

var_export($array);

print PHP_EOL;

//advance usage
$numberOfMatches = sscanf($str, '%s %d %d', $month, $year, $day);

print $month;
print PHP_EOL;

print $year;
print PHP_EOL;

print $day;
print PHP_EOL;

print $numberOfMatches;