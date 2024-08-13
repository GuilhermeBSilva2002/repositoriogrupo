<?php

use app\database\builder\InsertQuery;


require __DIR__ . '/../vendor/autoload.php';

$FieldsAndValuesProfessor = [
        'nome_professor' => 'Wilton Will',
        'cpf'         => '000.000.000-00',
        'rg'         => '03102949012',
        'data_nascimento' => '1995-07-12'
];

InsertQuery::table("professor")->save($FieldsAndValuesProfessor);

if (true) {
        echo "Dados Inseridos";
}