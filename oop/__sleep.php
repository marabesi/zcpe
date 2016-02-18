<?php

class Serializar {

    public function __wakeup()
    {
        print 'método invocado ao usar a função unserialize';
    }
}

$objetoSerializado = serialize(new Serializar());

unserialize(new Serializar());