<?php
namespace Zce;

class Conexao 
{
  public function getConexao()
  {
    $dsn     = 'mysql:dbname=zce;host=localhost';
    $usuario = 'usuario';
    $senha   = 123456;
    
    return new \PDO($dsn, $usuario, $senha);
  }
}

$con = new Conexao();
$con->getConexao();