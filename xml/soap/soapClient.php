<?php

$service = 'http://www.webservicex.com/globalweather.asmx?wsdl';

$soapClient = new SoapClient($service);

$method = $soapClient->__getFunctions();
print_r($method);

$params = [
    'CountryName' => 'Brazil',
    'CityName' => 'Sao Paulo',
];
$response = $soapClient->__soapCall('getWeather', [$params]);

print_r($response);

print_r($soapClient->__getTypes());