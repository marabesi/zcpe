<?php

class Wallet
{
    private $slots = array();
    
    public function selectCard($card)
    {
        foreach ($this->slots as $item)
        {
            if ($item === $card)
            {
                return $item;
            }
        }
        
        return false;
    }
}


$wallet = new ReflectionClass('Wallet');
Reflection::export($wallet);

