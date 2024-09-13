<?php

use app\database\builder\UpdateQuery;


require __DIR__ . '/../vendor/autoload.php';

$fieldsAndValues =  [
    'nome_disciplina'   => 'Programador',
    'confirma_disciplina'   => 'false'
];

$IsUpdate = UpdateQuery::table('disciplina')
    ->set($fieldsAndValues)
    ->where('id', '=', '17')
    ->update();
if(true){
    echo "Dados Atualizados!";

}