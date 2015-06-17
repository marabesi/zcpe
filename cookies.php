<?php

$name = 'zce';
$value = 'php certification';
$time = null;
$path = null;
$domain = null;
$secure = false;

setcookie($name, $value, $time, $path, $domain, $secure);

var_export($_COOKIE); //next request