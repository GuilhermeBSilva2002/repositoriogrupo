<?php

use app\database\builder\InsertQuery;


require __DIR__ . '/../vendor/autoload.php';

$FieldsAndValuesDisciplina = [
        'nome'        => 'Programador de Sistemas',
        'ativo'         => true,
];

InsertQuery::table("disciplina")->save($FieldsAndValuesDisciplina);

if (true) {
        echo "Dados Inseridos";
}