<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$nome_professor = ($_POST ['nome_professor']);
$cpf_professor = ($_POST ['cpf_professor']);
$rg_professor = ($_POST ['rg_professor']);
$data_nascimento_professor = ($_POST ['data_nascimento_professor']);

$FieldsAndValuesProfessor = [
    'nome_professor'  => $nome_professor,
    'cpf_professor'   => $cpf_professor,
    'rg_professor'    => $rg_professor,
    'data_nascimento_professor' => $data_nascimento_professor


];

$IsSave = InsertQuery::table('professor')->save($FieldsAndValuesProfessor);

if ($IsSave = true) {
    echo "Dados inseridos";
}else{
    echo "Dados não inseridos ou já inseridos";

}
