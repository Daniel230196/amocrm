<?php

namespace entities;

class Entity
{
    protected static string $mainEntity;
    protected string $path;
    protected array $data;
    protected \ApiConnection $connection;

    public function __construct(\ApiConnection $connection)
    {
        $this->connection = $connection;
    }

   protected function embed(array $data, string $type) : array
    {
        $count = $this->count($data);
        var_dump($data);

        for ($i=1; $i<=$count;++$i) {
            $data[static::$mainEntity]['_embedded']['_links'][$type][] = $data[$type];
        }

        unset($data[$type]);
       // return $data['companies']['_embedded']['leads'];
        return $data;
    }
    public function getData() : array
    {
        return $this->data;
    }
    public function getPath() : string
    {
        return $this->path;
    }

    private function count(array &$data) : int
    {
        $count = array_pop($data);

        return (empty($count) ? 0 : intval($count) );
    }
}