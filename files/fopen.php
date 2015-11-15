<?php

/**
 * r  - read only
 * r+ - reading and writing
 * w  - writing only pointer in the beginning
 * a  - writing only pointer in the end
 * a+ - reading and writing pointer in the end
 * x  - creates a file and open it for writing only (if the file exists already
 *      false is returned and a E_WARNING is thrown) pointer in the beginning
 * x+ - creates a file and open it for writing and reading (if the file exists
 *      already false is returned and a E_WARNING is thrown) pointer in the
 *      beginning
 * c  - writing only pointer in the beginning
 * c+ - writing and reading pointer in the begnning
 * b  - binary mode
 */

$file = fopen('/home/matheus/Documents/file.txt', 'r');

fwrite($file, 'File content');

fclose($file);