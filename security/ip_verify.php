<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $ipAtualDoUsuario = $_SERVER['REMOTE_ADDR'];

    if ($ipAtualDoUsuario != $pdo->buscaUltimoIpLoginEfetuado()) {
        session_destroy();

        header('Location: efetuar_login.php');
        exit();
    } else {
        $pdo->salvaIpDeLogin($ipUsuario);

    }
}