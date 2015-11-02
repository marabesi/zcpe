<?php

$a = [
    1,
    2,
    'a' => 'car',
];

$b = [
    'c' => 'car',
    3,
    5,
];

$diff = array_diff_uassoc($a, $b, function($a_chave, $b_chave) {
    return 'marabesi';
});

print_r($diff);