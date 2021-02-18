<?php


namespace entities;


class ContactsEntity extends Entity
{
    protected array $data = [
        'first_name',
        'custom_fields_values' => ['values' => [

        ] ]
    ];

    public function __construct(\ApiConnection $connection)
    {
        parent::__construct($connection);
    }

}