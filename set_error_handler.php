<?php

$notices = 0;

set_error_handler(function($errno, $error, $file, $line, $context) use (&$notices) {
    $notices++;
}, E_NOTICE);

$array = [
    
];

if ($array['a'] == 'test') //index not defined
{
    
}
if ($array['b'] == 'test')
{
    
}

print $notices . PHP_EOL; //2