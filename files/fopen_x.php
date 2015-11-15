<?php

$file = fopen('file.txt', 'x');

fwrite($file, 'New Item');

fclose($file);