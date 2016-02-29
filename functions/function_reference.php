<?php

class Casa {
    private $luz = 'on';

    public function &retornoPorReferencia() {
        return $this->luz;
    }
}

$casa = new Casa();

$luz = &$casa->retornoPorReferencia();

print $luz; // on

$luz = 'off';

print $casa->retornoPorReferencia();