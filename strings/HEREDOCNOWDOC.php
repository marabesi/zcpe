<?php

$template = <<<'TEXT'
    <html>
    </html>
TEXT;

print $template;

$a = 10;
$texto = <<<MEUTEMPLATE
    Agora podemos utilizar a variável, e 5 + 5 é $a
MEUTEMPLATE;

print $texto;