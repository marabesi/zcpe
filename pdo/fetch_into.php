<?php

class Usuario {

    private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host=localhost;dbname=phpconf2015;port=3306', 'root', 123456);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);


    }

    public function getUsuarios()
    {
        $prepare = $this->pdo->prepare('SELECT id,nome,email FROM usuarios');

        $prepare->setFetchMode(\PDO::FETCH_INTO, $this);

        $prepare->execute();

        return $prepare->fetch();
    }
}

$usuario = new Usuario();
print_r($usuario->getUsuarios());

