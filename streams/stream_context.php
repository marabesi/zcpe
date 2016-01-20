<?php

$context = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => 'name=PHPConference'
    ]
]);


print file_get_contents('http://phpconf.local/api/application', false, $context);