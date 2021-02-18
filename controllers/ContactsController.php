<?php

namespace controllers;


use entities\ContactsEntity;

class ContactsController extends Controller
{
    public function __construct(\Request $request)
    {
        $this->entity = new ContactsEntity(\ApiConnection::getInstance());
        parent::__construct($request);
    }
    public function add()
    {
        $data = $this->request->getData();

    }
}