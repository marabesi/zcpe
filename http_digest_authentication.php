<?php

if (!isset($_SERVER['PHP_AUTH_USER']))
{
    header('WWW-Authenticate Digest realm="marabesi"'
            . ',qop="auth",nonce="4993927ba6279",opaque="d8ea7aa61a1693024c4cc3a516f49b3c"');
    header('HTTP/1.1 401 Unauthorized');
    exit('Error ocurred');
    
}

print 'Hello ' . $_SERVER['PHP_AUTH_USER'];