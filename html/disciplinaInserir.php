<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$nome_disciplina = ($_POST['disciplina']);
$confirma_disciplina =($_POST['ativo']);

$FieldsAndValuesDisciplina = [
    'nome_disciplina'  => $nome_disciplina,
    'confirma_disciplina' => $confirma_disciplina


];

$IsSave = InsertQuery::table('disciplina')->save($FieldsAndValuesDisciplina);

if ($IsSave = true) {
    echo "Dados inseridos";
}else{
    echo "Dados não inseridos ou já inseridos";

}
