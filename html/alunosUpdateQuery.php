<?php

use app\database\builder\UpdateQuery;


require __DIR__ . '/../vendor/autoload.php';

$fieldsAndValues = [
    'nome'   => 'Guilherme',
    'cpf'    => '123.123.123-12',
    'rg'     => '929292992',
    'data_nascimento' => '2002-09-11'
];

$IsUpdate = UpdateQuery::table('aluno')
    ->set($fieldsAndValues)
    ->where('id', '=', '74')
    ->update();
var_dump($IsUpdate);
