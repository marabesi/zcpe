<?php

$fp = fopen('ftp://matheusmarabesi:marabesi@marabesi.com/home/matheusmarabesi/index.php', 'r');

print fgets($fp);