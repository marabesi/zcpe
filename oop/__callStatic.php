<?php

class Carro {
    
    public static function __callStatic($metodo, $argumentos)
    {
        print 'Método chamado estaticamente :' . $metodo;
    }
    
}

Carro::ligar();


