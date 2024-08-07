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
    public function save(array $valores =[]){
        var_dump($valores);
        die;
        $sql = "insert into {$this->table} () values";
        var_dump($sql);
}
}