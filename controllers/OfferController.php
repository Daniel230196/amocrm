<?php

namespace controllers;

use entities\CompanyEntity;
use entities\ContactsEntity;
use entities\OfferEntity;


class OfferController extends Controller
{
    private \ApiConnection $connection;
    public function __construct(\Request $request)
    {
        $this->connection = new \ApiConnection();
        $this->entity = new OfferEntity($this->connection);
        parent::__construct($request);
    }

    public function add()
    {
        $data = $this->request->getData();

        if (!empty($data['contacts']['first_name']) && !empty($data['companies']['name'])){


            $res = $this->entity->complexAdd($data);
        } else {

            $res = $this->entity->add($data);
        }

        var_dump($res);
    }

}
