<?php

namespace app\database\builder;

class InsertQuery
{ 
    private static $table;

    public static function table(string $tablename= '')
    {

        $classe_atual = new self;
        $classe_atual->table = $tablename;
        return $classe_atual;
    }
    public static function save(){
        var_dump('Funcionou' . static::$table);
}
}