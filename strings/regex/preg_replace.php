<?php


$texto = 'Vamos aplicar uma expressão aqui!';

print preg_replace(['/aqui/', '/!/'], '?', $texto);