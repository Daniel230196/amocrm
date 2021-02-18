<?php


namespace entities;


class OfferEntity extends Entity
{
    protected static $name = 'offer';
    private array $path = [
        'single' => '.amocrm.ru/api/v4/leads',
        'complex' => '.amocrm.ru/api/v4/leads/complex'
    ];

    public function __construct(\ApiConnection $connection)
    {
        parent::__construct($connection);
    }

    public function add($data)
    {
        $this->correctData($data);
        $data = json_encode([$data]);
        var_dump(json_encode($data));
        return $this->connection->init('POST', $this->path['single'], $data);
    }

    public function complexAdd($data)
    {
        $this->correctData($data);

        var_dump($data);
        $data = $this->embed($data, ['companies', 'contacts']);
        return $this->connection->init('POST', $this->path['complex'], $data);
    }

    private function &correctData(&$data)
    {
        foreach ($data['offer'] as $key => &$value) {
            if ($key == 'price'){
                $value = intval($value);
            }
            if (empty($value)){
                unset($value);
            }
        }
    }

}