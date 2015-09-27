<?php

class MeuElemento extends SimpleXMLElement {}

$xml = <<<XML
    <root>
        <name>Hello</name>
    </root>
XML;

$no = new DOMDocument();
$no->loadXML($xml);

print_r($no->getElementsByTagName('name'));

$simpleXmlElement = simplexml_import_dom($no, 'MeuElemento');

print_r($simpleXmlElement);