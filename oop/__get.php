<?php

class Ventilador {

    public function __get($nome) {
        print 'Tentativa de acessar a propriedade ' . $nome;
    }
}

$ventilador = new Ventilador();
$ventilador->marca;