<?php

use app\database\builder\InsertQuery;


require __DIR__ . '/../vendor/autoload.php';

$FieldsAndValuesEmpresa = [
        'nome_fantasia'              => 'SENAC',
        'cnpj'                       => '000.000.000-00',
        'inscricao_estadual'         => '24405443-6',
        'data_de_fundacao'           => '2003-10-02',
];

InsertQuery::table("empresa")->save($FieldsAndValuesEmpresa);

$FieldsAndValuesEmpresa2 = [
        'nome_fantasia'              => 'PetShop',
        'cnpj'                       => '000.000.000-00',
        'inscricao_estadual'         => '2442010-2',
        'data_de_fundacao'           => '1999-02-12',

];

InsertQuery::table("empresa")->save($FieldsAndValuesEmpresa2);

$FieldsAndValuesEmpresa3 = [
        'nome_fantasia'              => 'Cacoal Motos',
        'cnpj'                       => '000.000.000-00',
        'inscricao_estadual'         => '1020190-1',
        'data_de_fundacao'           => '2002-05-03',

];

InsertQuery::table("empresa")->save($FieldsAndValuesEmpresa3);

if (true) {
        echo "Dados Inseridos";
}
