<?php

namespace app\database\builder;

use app\database\Connection; 

class DeleteQuery
{
    private $tabela; 
    private $where = [];
    private $binds = [];

    public static function table(string $table): self
    {
        $self = new self;
        $self->tabela = $table;
        return $self;
    }

    public function where(string $field, string $operator, string|int $value, ?string $logic = null): self
    {
        $placeHolder = $field;

        if (str_contains($placeHolder, '.')) {
            $placeHolder = substr($field, strpos($field, '.') + 1);
        }

        // Adiciona a lógica apenas se não for nulo
        $condition = "{$field} {$operator} :{$placeHolder}";
        if ($logic) {
            $condition .= " {$logic}";
        }
        $this->where[] = $condition;
        $this->binds[$placeHolder] = $value;

        return $this;
    }

    public function executeQuery($query)
    {
        $connection = Connection::open();
        $prepare = $connection->prepare($query);
        return $prepare->execute($this->binds);
    }

    private function createQuery()
    {
        if (!$this->tabela) {
            throw new \Exception("A consulta precisa invocar o método table.");
        }

        $query = "DELETE FROM {$this->tabela}";
        if (count($this->where) > 0) {
            $query .= ' WHERE ' . implode(' ', $this->where);
        }

        return $query;
    }

    public function delete(): bool
    {
        $query = $this->createQuery();
        try {
            return $this->executeQuery($query);
        } catch (\PDOException $e) {
            throw new \Exception("Restrição: {$e->getMessage()}, SQL: " . $query);
        }
    }
}