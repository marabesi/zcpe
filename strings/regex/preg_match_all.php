<?php

$texto = 'Livro de certificação PHP';
$padrao = '/([A-Z])/';

preg_match_all($padrao, $texto, $ocorrencias, PREG_OFFSET_CAPTURE);

print_r($ocorrencias);