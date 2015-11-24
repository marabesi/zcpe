<?php

function adicionarRegistro(&$historico, $registro) {
    $historico[] = 'novo registro: ' . $registro;
}

$historicoDeEventos = [];
adicionarRegistro($historicoDeEventos, '02 de julho'); // Válido

echo '<pre>';
print_r($historicoDeEventos);
echo '</pre>';
exit;