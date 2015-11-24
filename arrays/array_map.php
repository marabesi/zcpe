<?php

$estilosMusicais = [
    'POP',
    'Rock',
];

$bandasMusicais = [
    'Cris',
    'Iron Maiden',
];

array_map(function($estilos, $bandas) {
    print $estilos . PHP_EOL;
    print $bandas . PHP_EOL;
}, $estilosMusicais, $bandasMusicais);
