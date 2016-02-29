<?php

function escapar($argumento)
{
    return preg_replace('/[^A-Za-z0-9_]+/', '', $argumento);
}

$pdo = new \PDO('mysql:host=localhost;dbname=phpconf2015;port=3306', 'root', 123456);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

$nomeDaTabela = 'usuarios';

$tabela = preg_replace('/[^A-Za-z0-9_]+/', '', $nomeDaTabela);

$query = $pdo->prepare("SELECT * FROM  $tabela");

$query->execute();

