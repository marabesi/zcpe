<?php

$to = '';
$subject = '';
$message = '';
$additional_headers = '';
$additional_parameters = '';

$send = mail($to, $subject, $message);

if($send)
{
    print 'Email has been sent';
}
else
{
    print 'Error';
}