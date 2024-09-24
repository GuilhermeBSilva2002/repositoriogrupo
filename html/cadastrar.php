<?php
// cadastrar.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT); // Criptografando a senha

    // Conectar ao banco de dados
    $conn = new mysqli('localhost', 'usuario', 'senha', 'banco_de_dados');

    // Verificando a conexão
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Preparar e executar a inserção
    $stmt = $conn->prepare("INSERT INTO usuario (nome, login, email, senha) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nome, $login, $email, $senha);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Erro ao cadastrar']);
    }

    $stmt->close();
    $conn->close();
}
?>
