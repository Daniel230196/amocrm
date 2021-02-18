<?php


namespace entities;


class CompanyEntity extends Entity
{

    public function __construct(\ApiConnection $connection,$data)
    {

        parent::__construct($connection);
    }
}