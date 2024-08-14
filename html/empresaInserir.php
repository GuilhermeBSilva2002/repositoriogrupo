<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$nome_empresa = ($_POST ['nome_empresa']);
$cnpj = ($_POST ['cnpj']);
$inscricao_estadual = ($_POST ['inscricao_estadual']);
$data_de_fundacao = ($_POST ['data_de_fundacao']);

$FieldsAndValuesEmpresa = [
    'nome_empresa'  => $nome_empresa,
    'cnpj'   => $cnpj,
    'inscricao_estadual'    => $inscricao_estadual,
    'data_de_fundacao' => $data_de_fundacao


];

$IsSave = InsertQuery::table('empresa')->save($FieldsAndValuesEmpresa);

if ($IsSave = true) {
    echo "Dados inseridos";
}else{
    echo "Dados não inseridos ou já inseridos";

}
