<?php

//class Bye
//{
//}
//
//$bye = new Bye();
//$bye(); //Fatal error

class Hello
{
    
    public function __invoke()
    {
        print 'World';
    }
    
}

$hello = new Hello();
$hello(); //World

