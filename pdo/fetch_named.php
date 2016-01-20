<?php

$pdo = new \PDO('mysql:host=localhost;dbname=phpconf2015;port=3306', 'root', 123456);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

$prepare = $pdo->prepare(
    'SELECT u.nome, p.nome, u.email
    FROM usuarios  AS u
    INNER JOIN permissao AS p on u.id = p.usuarios_id;'
);

$prepare->execute();

print_r($prepare->fetchAll(\PDO::FETCH_NAMED));

