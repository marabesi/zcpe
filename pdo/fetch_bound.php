<?php

$pdo = new \PDO('mysql:host=localhost;dbname=phpconf2015;port=3306', 'root', 123456);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

$email = 'marabesi@marabesi.com';



$prepare = $pdo->prepare('SELECT id,nome,email FROM usuarios WHERE email = :email');

$prepare->bindParam(':email', $email);
$prepare->execute();

print_r($prepare->fetch(\PDO::FETCH_ASSOC));

