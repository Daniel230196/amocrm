<?php


class Loader
{
    public static function load($className)
    {
        $class = str_replace('\\', '/', $className);
        require_once $class.'.php';
    }
    public static function start()
    {
        spl_autoload_register(__NAMESPACE__.'\Loader::load');
    }
}