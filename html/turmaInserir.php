<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$qtd_alunos = ($_POST ['qtd_alunos']);
$data_inicio = ($_POST ['data_inicio']);
$data_fim = ($_POST ['data_fim']);


$FieldsAndValuesTurma = [
    'qtd_alunos'      => $qtd_alunos,
    'data_inicio'     => $data_inicio,
    'data_fim'        => $data_fim,


];

$IsSave = InsertQuery::table('turma')->save($FieldsAndValuesTurma);

if ($IsSave = true) {
    echo "Dados inseridos";
}else{
    echo "Dados não inseridos ou já inseridos";

}
