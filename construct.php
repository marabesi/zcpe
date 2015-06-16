<?php

/**
 * The key point of this file is to note when php found __construct 
 * and it is php 5 it will get executed. Therefore we can execute a constructor
 * in php4 using the same name of the class instead of using __construct.
 */
class Php
{
    //php5 +
    public function __construct()
    {
        print 'PHP5 constructor';
    }
    
    //php4
    public function Php()
    {
        print 'Compatibility with php 4';
    }
}

$php5 = new Php();