<?php

class Copo {
    const limite =100;
    public $tamanho;
    public $cor;

    function adicionarBebida($bebida) {
        print 'Bebida escolhida ' . $bebida;
    }
}
$copo = new Copo();
$copo->tamanho = 'Grande';
$copo->cor = 'transparente';

print_r(get_class_methods($copo));

echo $copo::limite;