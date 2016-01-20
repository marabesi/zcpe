<?php

$texto = 'Livro de certificação PHP Livro';
$padrao = '~livro~i';

preg_match_all($padrao, $texto, $ocorrencias);

print_r($ocorrencias);