<?php


//$diretorio = new \RecursiveDirectoryIterator('/var/www');
//$iterator = new \RecursiveIteratorIterator($diretorio);
//$arquivos = new \RegexIterator($iterator, '/^.+\.php/', \RecursiveRegexIterator::GET_MATCH);
//
//foreach ($arquivos->getInnerIterator() as $arquivo) {
//    print $arquivo->getFileName();
//}


$diretorio = new \DirectoryIterator('glob://var/www/html/*.php');

foreach ($diretorio as $arquivos) {
    print $arquivos->getFilename();
}
