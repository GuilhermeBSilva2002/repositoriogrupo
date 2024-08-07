<?php

use app\database\builder\InsertQuery;


require __DIR__ . '/../vendor/autoload.php';

$FieldsAndValues = [
        'codigo_banco' => '001',
        'isbp'         => '001',
        'nome'         => 'BB',
        'nome_completo'=> 'Banco do Brasil',



];

//$con = Connection::open();

InsertQuery::table("bank")->save($FieldsAndValues);