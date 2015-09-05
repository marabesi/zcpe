<?php

// numeric index is destroied and associative keys are preserved

$a = ['a', 'b', 'c'];
$b = ['d', 'e', 'f'];

print_r(array_merge($a, $b)); //a,b,c,d,e,f
print PHP_EOL;

$a = ['a' => 'a', 'b', 'c'];
$b = ['d', 'e', 'f' => 'f', 'f' => 'e'];

print_r(array_merge($a, $b)); //a,b,c,d,e,e
print PHP_EOL;