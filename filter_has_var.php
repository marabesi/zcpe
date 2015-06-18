<?php

/** 
 * filter_has_var just validates if the given field exists but not validates
 * if it is empty
 */
if (!filter_has_var(INPUT_POST, 'username'))
{
    exit('no username sent' . PHP_EOL);
}

print 'Hello, ' . $_POST['username'] . PHP_EOL;