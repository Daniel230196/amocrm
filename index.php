<?php
require_once 'Loader.php';

Loader::start();

$request = new Request();

Router::init($request);
