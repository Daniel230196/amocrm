<?php

namespace controllers;

use entities\LeadsEntity;


class LeadsController extends Controller
{

    public function __construct(\Request $request)
    {

        $this->entity = new LeadsEntity(new \ApiConnection());
        parent::__construct($request);
    }

    public function add()
    {
        $data = $this->request->getData();
        $res = $this->entity->complexAdd($data);
    }

}
