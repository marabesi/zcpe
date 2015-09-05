<?php

$pdo = new PDO('mysql:host=localhost;dbname=zce;port=3306', 'root', '123456');

$row = $pdo->query('SELECT id, name, email FROM user');

$row->bindColumn('id', $id);
$row->bindColumn('name', $name);
$row->bindColumn('email', $email);

while($row->fetch())
{
    print $id . ' ' . $name . ' ' . $email . ' ' . PHP_EOL;
}