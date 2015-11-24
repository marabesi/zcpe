<?php

class Carro {

    protected $marca;
    
    public function ligarMotor()
    {
        print 'Motor ligado';
    }
}

$meuCarro = new Carro();
$meuCarro->marca = 'Ford';
$meuCarro->ligarMotor();

