<?php

class Caneta {
    private $cor = 'azul';

    public function __construct()
    {
        print $this->cor;
    }
}

class CanetaPreta extends Caneta {
    public function __construct()
    {
        print $this->cor;
    }
}

$caneta = new CanetaPreta();
