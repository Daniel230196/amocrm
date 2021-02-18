<?php

namespace entities;


class LeadsEntity extends Entity
{
    protected array $data;


    public function __construct(\ApiConnection $connection)
    {
        self::$mainEntity = 'companies';
        $this->path = '.amocrm.ru/api/v4/companies';
        parent::__construct($connection);
    }

    /*public function add($data)
    {
        $this->correctData($data);
        $data = json_encode([$data]);
        var_dump(json_encode($data));
        return $this->connection->init($this);
    }*/

    public function complexAdd($data)
    {

        $this->correctData($data);

        $this->data = $this->embed($data, 'leads');


        return $this->connection->init($this);
    }

    private function &correctData(&$data)
    {
        $data['companies']['company_id'] = rand(1,3000);
        foreach ($data['leads'] as $key => &$value) {
            if ($key == 'price'){
                $value = intval($value);
            }
            if (empty($value)){
                unset($value);
            }
        }
    }

}