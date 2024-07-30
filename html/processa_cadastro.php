<?php
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $nomeCurso = htmlspecialchars($_POST['nomeCurso']);
    $valorCurso = htmlspecialchars($_POST['valorCurso']);
    $turno = htmlspecialchars($_POST['turno']);


echo "Curso cadastrado com sucesso" . "<br>";
echo "Nome do curso: ". $nomeCurso . "<br>";
echo "Valor do curso: R$ ". $valorCurso . "<br>";
echo "Turno: " . $turno;

} else {
    echo "Acesso Inválido.";
}
?>