<?php


class Usuario extends \PDO
{
    public function buscaUltimoIpLoginEfetuado($usuario)
    {
        $query = $this->prepare('SELECT ip FROM usuarios WHERE usuario = :usuario');

        $query->execute([
            ':usuario' => $usuario
        ]);

        $dados = $query->fetch();

        return $dados['ip'];
    }

    public function salvaIpDeLogin($ip, $usuario)
    {PRINT $ip;
        $query = $this->prepare('UPDATE usuarios SET ip = :ip WHERE usuario = :usuario');

        return $query->execute([
            ':ip' => $ip,
            ':usuario' => $usuario
        ]);
    }
}

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $pdo = new \Usuario('mysql:host=localhost;dbname=phpconf2015;port=3306', 'root', 123456);
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $ipAtualDoUsuario = $_SERVER['REMOTE_ADDR'];

    if ($ipAtualDoUsuario != $pdo->buscaUltimoIpLoginEfetuado($usuario)) {
        session_destroy();
        $pdo->salvaIpDeLogin($ipAtualDoUsuario, $usuario);

        exit('Usuário está logado em outra máquina');
    } else {
        print 'Olá usuário';
    }
}


?>

<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="usuario"/>
            <input type="password" name="senha"/>

            <input type="submit" value="enviar"/>
        </form>
    </body>
</html>
