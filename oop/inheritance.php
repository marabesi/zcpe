<?php

class Casa {
    public $cor;
    public $quantidadeDeQuartos;
    
    function abrirPortaDaSala()
    {
        print 'Porta da sala aberta';
    }
}

class CasaReformada extends Casa {
    function abrirJanelaDoQuarto()
    {
        print 'Janela do quarto aberta';
    }
}

$casaReformada = new CasaReformada();
$casaReformada->cor = 'Azul';
$casaReformada->abrirPortaDaSala();
