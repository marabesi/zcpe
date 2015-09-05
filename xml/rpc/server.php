<?php

//creating server
$server = xmlrpc_server_create();

xmlrpc_server_register_method($server, 'hello', function(){
  return 'Hello world';  
});

// creating a request to the server
header('Content-Type: text/xml');

$xml = '<?xml version="1.0"?>
<methodCall>
  <methodName>hello</methodName>
</methodCall>';

print xmlrpc_server_call_method($server, $xml, array());
