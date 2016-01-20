<?php

$pdo = new \PDO('mysql:host=localhost;dbname=phpconf2015;port=3306', 'root', 123456);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

$prepare = $pdo->prepare('SELECT id, nome, email FROM usuarios');

$prepare->execute();

print_r($prepare->fetchAll(\PDO::FETCH_NUM));

