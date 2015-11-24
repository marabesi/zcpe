<?php

class Carro {
    public function ligar(Closure $callback = null)
    {
        $this->ativarMotor();

        call_user_func($callback);
    }

    protected function ativarMotor() {
        print 'Motor ativo';

        return true;
    }
}