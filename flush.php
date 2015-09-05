<?php

print 'Loading' . PHP_EOL;

ob_flush();
flush();
sleep(2);

print 'Almost done ... Loading' . PHP_EOL;

ob_flush();
flush();
sleep(3);

print 'Done' . PHP_EOL;