<?php

$password = '123456';

print crypt($password, 10) . PHP_EOL;

print crypt($password) . PHP_EOL;