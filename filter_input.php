<?php

if (!filter_has_var(INPUT_POST, 'username'))
{
    exit('Please, fill the field username' . PHP_EOL);
}

if (false === filter_input(INPUT_POST, 'username', FILTER_DEFAULT, FILTER_SANITIZE_STRING))
{
    exit('Invalid username');
}

print 'Hi, ' . $_POST['username'] . PHP_EOL;