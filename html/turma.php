<?php

use app\database\builder\InsertQuery;


require __DIR__ . '/../vendor/autoload.php';

$FieldsAndValuesTurma = [
        'quantidade_alunos' => 15,
        'data_inicio'       => '2024-07-15',
        'data_fim'          => '2024-09-20',
        
];

InsertQuery::table("turma")->save($FieldsAndValuesTurma);

if (true) {
        echo "Dados Inseridos";
}