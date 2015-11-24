<?php

class Carro {

    protected $marca = 'GM';
    
    public function ligarMotor()
    {
        print 'Motor ligado';
    }
}

class Caminhao extends Carro {
    public function exibirMarca()
    {
        print $this->marca;
    }
}

$caminhao = new Caminhao();
$caminhao->exibirMarca();
