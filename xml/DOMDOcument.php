<?php

$dom = new DOMDocument();
$dom->load('/home/marabesi/Downloads/jovemnerd.xml');

print_r($dom->getElementsByTagName('channel')); //DOMNodeList with length property

print_r($dom->getElementById('tinyhippos-injected')); //NULL or DOMElement


