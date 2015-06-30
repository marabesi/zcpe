<?php

interface A
{
    function a();
}

interface B
{
    function b();
}

interface C extends A, B {}

class ConcreteClass implements C
{
    public function a()
    {
        print 'a' . PHP_EOL;
    }

    public function b()
    {
        print 'b' . PHP_EOL;
    }

}

$instance = new ConcreteClass();
$instance->a();
$instance->b();