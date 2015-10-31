<?php

$category = 'shoes,suits,rings';


print_r(explode(',', $category, 2));



$brands = array(
    'intel' => 'aa',
    'dell' => 'bbb',
    'google' => 'ccc'
);

print implode(',', $brands);