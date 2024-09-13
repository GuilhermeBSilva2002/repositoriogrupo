<?php

use app\database\builder\UpdateQuery;


require __DIR__ . '/../vendor/autoload.php';

$fieldsAndValues = [
    'qtd_alunos'    => '16',
    'data_inicio'   => '2022-06-09',
    'data_fim'      => '2022-08-03'

];

$IsUpdate = UpdateQuery::table('turma')
    ->set($fieldsAndValues)
    ->where('id', '=', '10')
    ->update();
if (true) {
    echo "Dados Atualizados!!";
}
