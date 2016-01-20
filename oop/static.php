<?php

class A
{

    public static function quem()
    {
        echo __CLASS__;
    }

    public static function teste()
    {
        self::quem();
    }
}

class B extends A
{

    public static function quem()
    {
        echo __CLASS__;
    }
}
B::teste();
