<?php

class livroTest
{
    public $dados1;
    public $dados2;

    public static function __set_state($listaDeDados)
    {
        $livroOBJ = new self;
        $livroOBJ->dados1 = $listaDeDados['dados1'];
        $livroOBJ->dados2 = $listaDeDados['dados2'];

        return $livroOBJ;
    }

}

$obj = new livroTest;

$obj->dados1 = 1;
$obj->dados2 = 2;

print_r($obj->dados1);

var_export($obj);