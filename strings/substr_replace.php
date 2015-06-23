<?php

$str = 'Just creating this fucking string';

print 'original: ' . $str . ' length: ' . strlen($str);

print PHP_EOL;

$replaced = substr_replace($str, '***', 19, 7);

print 'replaced: ' . $replaced . ' length ' . strlen($replaced);