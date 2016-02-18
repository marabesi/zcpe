<?php

//print file_get_contents('phar://my.phar/funcoes.php');


$iterator = new \RecursiveTreeIterator(new RecursiveDirectoryIterator('phar://my.phar'));

foreach ($iterator as $file) {
    print $iterator->current() . PHP_EOL;
}

//$p = new Phar('my.phar');
//$p->startBuffering();
//$p->buildFromDirectory(__DIR__ . '/src', '$(.*)\.php$');
//$p->stopBuffering();
//echo "my.phar archive has been saved";
//
//
//print PHP_EOL;
//
//$p = new Phar('my.phar', 0);
////// Phar extends SPL's DirectoryIterator class
//foreach (new RecursiveIteratorIterator($p) as $file) {
//    echo $file->getFileName() . "\n";
//}
//
