<?php

class Arquivo {
    private $arquivo = 'zend.txt';

    public function exibirNome()
    {
        print $this->arquivo;
    }
}

$arquivo = new Arquivo();
$arquivo->exibirNome();


