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

try {
    numeroMaior(1, 1);
} catch (Exception $excecao) {
    print 'Tratamento genérico: ' . $excecao->getMessage();
} catch (InvalidArgumentException $excecao) {
    print 'Argumento inválido ' . $excecao->getMessage();
}