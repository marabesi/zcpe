<?php

$fp = fopen('file.txt', 'r'); 
//$fp = fopen('php://filter/read=string.toupper/resource=file.txt', 'r');

stream_filter_append($fp, 'string.toupper');

fpassthru($fp);

fclose($fp);
