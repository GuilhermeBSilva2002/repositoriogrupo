<?php
header('Content-Type: application/json');

// Captura os dados do formulário
$login = $_POST['login'];
$senha = $_POST['senha'];

// Configurações do banco de dados
$host = 'localhost'; // Altere conforme sua configuração
$db = 'aulasenac'; // Nome do seu banco de dados
$user = 'gbsilva'; // Usuário do banco de dados
$pass = 'guilherme10'; // Senha do banco de dados

try {
    // Conectar ao banco de dados
    $pdo = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepara e executa a consulta
    $stmt = $pdo->prepare('SELECT * FROM usuario WHERE login = :login');
    $stmt->execute(['login' => $login]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verifica se o usuário existe e se a senha está correta
    if ($user && password_verify($senha, $user['senha'])) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Login ou senha inválidos.']);
    }
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>
