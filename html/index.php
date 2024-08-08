<?php

use app\database\builder\InsertQuery;


require __DIR__ . '/../vendor/autoload.php';

/*$FieldsAndValues = [
        'codigo_banco' => '001',
        'isbp'         => '001',
        'nome'         => 'BB',
        'nome_completo' => 'Banco do Brasil'
];

InsertQuery::table("bank")->save($FieldsAndValues);*/

$FieldsAndValuesAluno1 = [
        'nome'   => 'Guilherme',
        'cpf'    => '000.000.000-00',
        'rg'     => '003910210',
        'data_nascimento' => '2002-09-11',
];


InsertQuery::table('aluno')->save($FieldsAndValuesAluno1);

$FieldsAndValuesAluno2 = [
        'nome'   => 'Julio',
        'cpf'    => '321.321.321-32',
        'rg'     => '1225151109',
        'data_nascimento' => '2001-10-09',
];

InsertQuery::table('aluno')->save($FieldsAndValuesAluno2);

$FieldsAndValuesAluno3 = [
        'nome'    => 'Cristina',
        'cpf'     => '123.123.123-12',
        'rg'      => '1310941094',
        'data_nascimento' => '2000-02-13',

];

InsertQuery::table('aluno')->save($FieldsAndValuesAluno3);

$FieldsAndValuesAluno4 = [
        'nome'    => 'Clara',
        'cpf'     => '456.456.456-45',
        'rg'      => '1209301021',
        'data_nascimento' => '2004-09-20',

];

InsertQuery::table('aluno')->save($FieldsAndValuesAluno4);