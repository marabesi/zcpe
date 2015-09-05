<?php

/**
 * PDO has 3 (three) distinct methods to set the error handling.
 * 
 * PDO::ERRMODE_SILENT - this is the default used by PHP and you can only 
 * check the error using PDO::errorCode() or PDO::errorInfo.
 * Otherwise if the error comes from statements you should use 
 * PDOStatement::errorCode() or PDOStatement::errorInfo.
 * 
 * PDO::ERRMODE_WARNING - this handler show a warning as known to php developers,
 * instead of throwing and exception or fill up PDO::errorCode() or
 * PDO::errorInfo().
 * 
 * PDO::ERRMODE_EXCEPTION - Throws an PDOException to be caught
 */

$dsn = 'mysql:host=localhost;dbname=zce;port=3306';

// will always throw an exception if the connection fails
$pdo = new PDO($dsn, 'root', 123456);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

//now an warning is shown
$query = $pdo->query('SELECT * FROM tableinvalid');

