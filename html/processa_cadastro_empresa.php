<?php
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $nomeEmpresa = htmlspecialchars($_POST['nomeEmpresa']);
    $cnpj_empresa = htmlspecialchars($_POST['cnpj_empresa']);
    $inscricao_estadual = htmlspecialchars($_POST['inscricao_estadual']);
    $data_de_fundacao = htmlspecialchars($_POST['data_de_fundacao']);


echo "<h1> Empresa cadastrada com sucesso </h1>" . "<br>";
echo "Nome da empresa: ". $nomeEmpresa . "<br>";
echo "CNPJ da empresa: ". $cnpj_empresa . "<br>";
echo "Inscrição Estadual da empresa: " . $inscricao_estadual . "<br>";
echo "Data de Fundação da empresa: " . $data_de_fundacao . "<br>";

} else {
    echo "Acesso Inválido.";
}
?>