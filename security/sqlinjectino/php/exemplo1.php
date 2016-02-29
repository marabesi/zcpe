<?php

// Verifica se a conexão foi montada com sucesso
try {
    $conn = new PDO('mysql:dbname=sqlinjection;host=127.0.0.1;charset=utf8', 'root', '123456');
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// Obtem a próxima página
$offset = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_SPECIAL_CHARS);

// Monta a instrução para selecionar os dados
$query  = "SELECT id_produto, nm_produto FROM tb_produto ORDER BY nm_produto LIMIT 20 OFFSET $offset;";

// Executa a instrução e obtém o resultado
foreach ($conn->query($query) as $row) {
	printf ("[Identificador do produto: <strong>%s</strong>] - [Produto: <strong>%s</strong>] <br />", $row['id_produto'], $row['nm_produto']);
}
