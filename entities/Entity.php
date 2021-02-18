<?php

namespace entities;

class Entity
{
    protected static $name;
    protected array $data;
    protected \ApiConnection $connection;

    public function __construct(\ApiConnection $connection)
    {
        $this->connection = $connection;
    }

    protected function embed(array $data, array $types) : array
    {
        foreach ( $types as $value){
            $data[static::$name]['_embedded'][$value] = [$data[$value]];
            unset($data[$value]);
        }

        return $data;
    }
}