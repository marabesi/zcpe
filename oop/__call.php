<?php

class Celular {

    protected function ligarTela($segundos)
    {
        print 'Ligando tela do celular por ' . $segundos . ' segundos';
    }

    public function __call($method, array $argumentos) {
        print 'Método ' . $method . ' invocado com os argumentos' . PHP_EOL;
        
        foreach($argumentos as $argumento) {
            print $argumento . PHP_EOL;
        }
    }
}

$motorola = new Celular();
$motorola->ligarTela(2);
