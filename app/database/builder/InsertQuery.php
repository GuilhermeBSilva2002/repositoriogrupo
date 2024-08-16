<?php

namespace app\database\builder;

use app\database\Connection;

class InsertQuery
{
    private static $table;
    public static function table(string $tablename = '')
    {

        $classe_atual = new self;
        $classe_atual->table = $tablename;
        return $classe_atual;
    }
    public function save(array $valores = [])
    {
        $campos = implode(',', array_keys($valores));
        $parametros = ':' . implode(',:', array_keys($valores));
        $sql = "insert into {$this->table} ($campos) values ({$parametros})";
        $con = Connection::open();
        $prepared = $con->prepare($sql);
        $prepared->execute($valores);
    }
}
