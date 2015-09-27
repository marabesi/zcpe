<?php

$xml = <<<ABC
<book id="listing">
 <title>My lists</title>
 <chapter id="books">
  <title>My books</title>
 </chapter>
</book>
ABC;

$load = new DOMDocument();
$load->load('/home/matheus/Downloads/jovemnerd.xml');

$loadHtml = new DOMDocument();
$loadHtml->loadHTML('<html><p>Hello</p><br></html>');

$loadHtmlFile = new DOMDocument();
$loadHtmlFile->loadHTMLFile('book.html');

$loadString = new DOMDocument();
$loadString->loadXML($xml);


print_r($load->getElementsByTagName('channel'));       //DOMNodeList with length property
print_r($load->getElementById('tinyhippos-injected')); //NULL or DOMElement




