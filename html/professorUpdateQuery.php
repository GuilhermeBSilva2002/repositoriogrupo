<?php

use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

$fieldsAndValues = [
    'nome_professor'   => 'Will',
    'cpf_professor'    => '321.321.321-32',
    'rg_professor'     => '09559120-1',
    'data_nascimento_professor'   => '1910-09-23'

];

$IsUpdate = UpdateQuery::table('professor')
    ->set($fieldsAndValues)
    ->where('id', '=', '25')
    ->update();
if(true){
    echo "Dados Atualizados";
}