<?php

function numeroMaior($primeiroNumero = 0, $segundoNumero = 0) {
    if ($primeiroNumero > $segundoNumero) {
        throw new Exception(
            'O primeiro número é maior que o segundo'
        );
    }

    if ($primeiroNumero === $segundoNumero) {
        throw new InvalidArgumentException(
            'Os números não devem ser iguais'
        );
    }

    return true;
}

//numeroMaiores(2, 1);

try {
    numeroMaior(1, 1);
} catch (InvalidArgumentException $excecao) {
    print 'InvalidArgumentException ' . $excecao->getMessage();
} catch (Exception $excecao) {
    print 'Exception ' . $excecao->getMessage();
} 
