<?php

use app\database\builder\UpdateQuery;


require __DIR__ . '/../vendor/autoload.php';

$fieldsAndValues = [
    'nome_empresa'   => 'TV',
    'cnpj'           => '3902102930',
    'inscricao_estadual'   => '091381',
    'data_de_fundacao'     => '1986-01-15'

];

$IsUpdate = UpdateQuery::table('empresa')
    ->set($fieldsAndValues)
    ->where('id', '=', '37')
    ->update();
if(true){
    echo "Dados Atualizados com Sucesso!";

}