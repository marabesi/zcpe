<?php

$number = 1999.9;

echo number_format($number); //will be formatted without decimals, but with a comma (",") between every group of thousands

echo PHP_EOL;

echo number_format($number, 2); //number of decimals

echo PHP_EOL;

echo number_format($number, 2, ',', '.'); //we cannot specify just 3 arguments

echo PHP_EOL;
