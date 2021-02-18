<?php

namespace controllers;

use entities\Entity;


class Controller
{
    protected \Request $request;
    protected Entity $entity;

    public function __construct(\Request $request)
    {
        $this->request = $request;
        include('view.php');
    }
}