<?php

set_exception_handler(function($exception) {
    $exception->getMessage();
    
    print 'Exception handler !' . PHP_EOL;
});

throw new Exception('Hello World');
