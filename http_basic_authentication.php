<?php

if (!isset($_SERVER['PHP_AUTH_USER']))
{
    header('WWW-Authenticate: Basic realm="marabesi"');
    header('HTTP/1.1 401 Unauthorized');
    exit('Unauthorized ' . PHP_EOL);
}

print 'Hello ' . $_SERVER['PHP_AUTH_USER'] . PHP_EOL;