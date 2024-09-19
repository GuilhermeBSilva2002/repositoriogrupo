<?php 
use app\database\builder\DeleteQuery;
require __DIR__ . '/../vendor/autoload.php';

try {
    DeleteQuery::table('disciplina')
        ->where('id', '=', 1)
        ->delete();
    // Tratar sucesso
} catch (\Exception $e) {
    // Tratar erro
    echo $e->getMessage();
}