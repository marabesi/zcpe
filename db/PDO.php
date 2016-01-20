<?php

namespace My;

class PDO
{
    private static $pdo = false;

    /**
     * @return \PDO
     */
    public static  function get()
    {
        if (self::$pdo === false) {
            self::$pdo = new \PDO('mysql:dbname=phpconf2015;host=localhost',
                'root', '123456', [
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]
            );
        }

        return self::$pdo;
    }
}

$pdo = \My\PDO::get();

print_r($pdo->query('SELECT * FROM usuarios'));

//$smt->fetchAll();

//$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
//
//print $pdo->getAttribute(\PDO::ATTR_ERRMODE);

$executar = $pdo->exec('DELETE FROM users WHERE email = "user"');

//echo '<pre>';
//print_r($executar);
//echo '</pre>';
//exit;


//$executar = $pdo->exec(''
//    . 'INSERT INTO users (name, email, password) VALUES ("user", "user", "user")');
//
//echo '<pre>';
//print_r($executar);
//echo '</pre>';

//$pdo->commit();


$dados = $pdo->query('SELECT * FROM usuarios');

print_r($dados->fetchAll(\PDO::FETCH_ASSOC));