<?php
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $nomeProfessor = htmlspecialchars($_POST['nomeProfessor']);
    $cpf_professor = htmlspecialchars($_POST['cpf_professor']);
    $rg_professor = htmlspecialchars($_POST['rg_professor']);
    $data_nascimento_professor = htmlspecialchars($_POST['data_nascimento_professor']);


echo "<h1> Professor cadastrado com sucesso </h1>" . "<br>";
echo "Nome do professor: ". $nomeProfessor . "<br>";
echo "CPF do professor: " . $cpf_professor . "<br>";
echo "RG do professor: " . $rg_professor . "<br>";
echo "Data de Nascimento do professor: " . $data_nascimento_professor . "<br>";

} else {
    echo "Acesso Inválido.";
}
?>