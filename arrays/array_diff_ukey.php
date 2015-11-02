<?php

$a = [
    'b' => 1,
    'a' => 'car',
    'c' => 3,
];

$b = [
    'c' => 'car',
    'a' => 'nothing',
    5,
];

$diff = array_diff_ukey($a, $b, function($key1, $key2) {
    if ($key1 === $key2) {
        return 0;
    } else if ($key1 > $key2) {
        return 1;
    } else {
        return -1;
    }
});

print_r($diff);