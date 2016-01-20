<?php

$xml = '
<biblioteca>
    <estante identificador="C2">
        <livro id="1">
            <nome>PHP</nome>
            <descricao>Aprenda PHP</descricao>
        </livro>
        <livro id="2">
            <nome>Zend framework</nome>
            <descricao>Como utilizar o Zend framework</descricao>
        </livro>
    </estante>
</biblioteca>
';

$documento = new DOMDocument();
$documento->loadXML($xml);

$xpath = new DOMXpath($documento);
$elemento = $xpath->query('//livro');

print_r($elemento);