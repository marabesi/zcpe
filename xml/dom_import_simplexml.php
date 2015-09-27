<?php

$xml = <<<XML
    <root>
        <name>Hello</name>
    </root>
XML;

$no = new SimpleXMLElement($xml);

$simpleXml = dom_import_simplexml($no);

print_r($simpleXml);