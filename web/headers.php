<?php

//print_r(headers_list());

//header('HTTP/1.0 500 Record not found');
//header('Content-Type: application/json');
//header('Content-Type: text/xml');

header('Invalid-Token: meu_token', true, 401);

if (headers_sent()) {
    print_r(headers_list());
}
