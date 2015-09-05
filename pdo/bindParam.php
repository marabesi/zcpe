<?php

$id = $argv[1];

$pdo = new PDO('mysql:host=localhost;dbname=zce;port=3306', 'root', '123456');

$smt = $pdo->prepare('SELECT id, name, email FROM user WHERE id = :id');

$smt->bindParam(':id', $id, PDO::PARAM_INT);

$smt->execute();

$row = $smt->fetch();

var_export($row);