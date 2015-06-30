<?php

/**
 * Generators are functions with ability to yield a sequence of values 
 */

function getLogs()
{
    yield [
        ['2015-02-02', 'ERROR', 'message 1'],
        ['2015-02-02', 'ERROR', 'message 2'],
        ['2015-02-02', 'ACCESS', 'message 3']
    ];
}

foreach (getLogs() as $array)
{
    var_dump($array);
}