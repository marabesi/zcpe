<?php

class Ventilador {

    public function __set($nome, $valor) {
        print 'Tentativa de definir o valor da propriedade ' . $nome . ' com o valor ' . $valor;
    }
}

$ventilador = new Ventilador();
$ventilador->preco = 90.00;