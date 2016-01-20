<?php

class Livro {
    
    public function __construct()
    {
        print 'Objeto Livro criado';
    }
    
    public function __destruct()
    {
        print 'Objeto Livro destruído';
    }
    
}


$php = new Livro();
