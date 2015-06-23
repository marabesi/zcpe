<?php

echo $a = 1;
echo PHP_EOL;
echo $b = 2.5;
echo PHP_EOL;
echo $c = 0xFF;
echo PHP_EOL;

__halt_compiler();

$d = $b + $c;
$e = $d * $b;
$f = ($d + $e) % $a;

print ($f + $e);
echo PHP_EOL;
