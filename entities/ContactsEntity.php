<?php


namespace entities;


class ContactsEntity extends Entity
{
    protected array $data = [
        'name',
        'first_name',
        'custom_fields_values' => ['values' => [

        ] ]
    ];
    private $paths = [];

    public function __construct(\ApiConnection $connection)
    {
        parent::__construct($connection);
    }

}