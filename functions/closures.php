<?php

function saudacao() {
    return function() {
        return 'Bom dia!';
    };
}

$closure = saudacao();

print $closure();