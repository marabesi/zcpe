<?php

header('Content-Type: text/xml');

$request = xmlrpc_encode_request('hello', array());

$context = stream_context_create(array('http' => array(
  'method' => 'post',
  'header' => 'Content-Type: text/xml',
  'content' => $request
)));

$url = 'http://marabesi:8181/ZCE/xml/rpc/server.php';

$content = file_get_contents($url, false, $context);

//print $content; // full xml of rpc response

print xmlrpc_decode($content); //Hello World
