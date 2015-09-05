<?php

$dom = new DomDocument();
$dom->loadXML('<html><body bgcolor="#ff0000"><p><a href="aaa">link</a></p></body></html>');
$xpath = new DomXPath($dom);
$nodes = $xpath->query("*[local-name()='body']", $dom->documentElement);
echo $nodes->item(0)->getAttributeNode('bgcolor')->value . PHP_EOL;
