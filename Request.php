<?php


class Request
{
    private $data;
    private $headers;
    private $uri;

    public function __construct()
    {
        $this->data = $this->cleanInput($_REQUEST);
        //$this->headers = getallheaders();
        $this->uri = $_SERVER['REQUEST_URI'];

    }

    private function cleanInput(array $requestData)
    {
        return filter_var_array($requestData);
    }

    public function getData()
    {
        return $this->data;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function post()
    {
    }

}