<?php

$compressedFile = fopen('compress.zlib://file.tar.gz', 'r');

if (!$compressedFile) {
    throw new Exception('error while reading compressed file');
}

while(feof($compressedFile) !== true) {
    print fgetc($compressedFile);
}
