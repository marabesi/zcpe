<?php

class MyService
{
    public function hello()
    {
        return 'hello world';
    }
}

$soapServer = new SoapServer(null, [
    'uri' => 'http://localhost/wsdl',
    'classmap' => [
        'service' => 'MyService'
    ]
]);

$soapServer->setClass('MyService');
$soapServer->handle();