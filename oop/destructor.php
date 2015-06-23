<?php

class Destructor
{
    
    public function __construct()
    {
        print '__construct() has been called ' . time() . PHP_EOL;
    }
    
    public function __destruct()
    {
        print '__destruct() has been called ' . time() . PHP_EOL;
    }
    
}

$obj = new Destructor();