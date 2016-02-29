<?php

error_reporting(E_ALL);



$arquivo = fopen('file.txt', 'a');

//fwrite($arquivo, 'Meu novo item');

fgets($arquivo);

fclose($arquivo);
