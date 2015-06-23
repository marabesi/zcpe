<?php

$fp = fopen('fscanf_file.txt', 'r');

fscanf($fp, '%s %s %s', $name, $profession, $countrycode); // first line

print $name . PHP_EOL;
print $profession . PHP_EOL;
print $countrycode . PHP_EOL;

print PHP_EOL;

//reading all lines
while (!feof($fp))
{
    fscanf($fp, '%s %s %s', $name, $profession, $countrycode);

    print $name . ' ' . $profession . ' ' . $countrycode;
    print PHP_EOL;
}
