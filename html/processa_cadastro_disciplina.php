<?php
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $Disciplina = htmlspecialchars($_POST['Disciplina']);
    
    


echo "<h1> Disciplina cadastrada com sucesso </h1>" . "<br>";
echo "Nome da Disciplina: ". $Disciplina . "<br>";

} else {
    echo "Acesso Inválido.";
}

