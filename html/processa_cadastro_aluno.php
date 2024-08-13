<?php
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $nomeAluno = htmlspecialchars($_POST['nomeAluno']);
    $cpf = htmlspecialchars($_POST['cpf']);
    $rg = htmlspecialchars($_POST['rg']);
    $data_nascimento = htmlspecialchars($_POST['data_nascimento']);


echo "<h1> Aluno cadastrado com sucesso </h1>" . "<br>";
echo "Nome do aluno: ". $nomeAluno . "<br>";
echo "CPF do aluno: " . $cpf . "<br>";
echo "RG do aluno: " . $rg . "<br>";
echo "Data de Nascimento do aluno: " . $data_nascimento . "<br>";

} else {
    echo "Acesso Inválido.";
}
?>