<?php

$dsn = 'pgsql:host=localhost;port=5432;dbname=senac';
$usuario = 'gbsilva2002';
$senha = 'guilherme10';


try {
    $pdo = new PDO($dsn, $usuario, $senha);
    // Configurar o PDO para lançar exceções em caso de erro
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida";
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
