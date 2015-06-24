<?php

$pdo = new PDO('mysql:host=localhost;dbname=zce;port=3306', 'root', '123456');

$query = $pdo->query('SELECT id, name, email FROM user', PDO::FETCH_BOTH);

foreach ($query->fetchAll() as $row)
{
    print $row['id'] . ' ' . $row['name'] . ' ' . $row['email'] . PHP_EOL;
}

$queryObj = $pdo->query('SELECT id, name, email FROM user', PDO::FETCH_OBJ);

foreach ($queryObj->fetchAll() as $obj)
{
    print $obj->id . ' ' . $obj->name . ' ' . $obj->email . PHP_EOL;
}

$queryBound = $pdo->query('SELECT id, name, email FROM user', PDO::FETCH_BOUND);