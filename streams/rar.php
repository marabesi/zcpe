<?php

$arquivo = '/home/matheus';
//
//print file_get_contents('rar://' . rawurlencode($arquivo) . 'meu_rar.rar#');

//$stream = fopen('rar://' . rawurlencode( $arquivo ) . '/pgadmin.rar#pgadmin.log', 'r');
//
//print fgets($stream);
//
//print file_put_contents('rar:///home/matheus/pgadmin.rar#novo_log.log', 'hello there');

//print rawurlencode( $arquivo );

//$iterator = new \DirectoryIterator(
//    'rar:///home/matheus/pgadmin.rar#'
//);

class MyRecDirIt extends RecursiveDirectoryIterator {

    function current() {
        return rawurldecode($this->getSubPathName()) .
        (is_dir(parent::current())?" [DIR]":"");
    }

}


$tree = new \RecursiveTreeIterator(new RecursiveDirectoryIterator(
    'rar:///home/matheus/meu_rar.rar#'
));

foreach ($tree as $file) {
    print $file . PHP_EOL;
}