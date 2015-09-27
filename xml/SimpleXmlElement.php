<?php

$data = <<<XMLDATA
<zce>
    <basico>
        <sintaxe>
        PHP tags, Bitwise
        </sintaxe>
    </basico>
</zce>
XMLDATA;

$obj = new SimpleXMLElement($data);
$obj->addAttribute('myAtributte', 'hi');

print_r($obj->children()->basico);

print_r($obj->basico);

