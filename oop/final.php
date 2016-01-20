<?php

class Televisao {
    private $canal = 99;

    final public function mudarCanal($canal)
    {
        $this->canal = $canal;
    }
}

class NovaTelevisao extends Televisao {

    public function mudarCanal($canal) {
        
    }

}