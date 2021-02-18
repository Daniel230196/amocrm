<?php

class Router
{
    private static array $routes = [
        'OfferController' => ['add','test'],
    ];
    private static string $contrNamespace = 'controllers\\';
    public static function init(Request $request)
    {
        $uri = $request->getUri();
        $uri = explode('/', $uri);
        var_dump($uri);
        $contrName = ucfirst($uri[1]).'Controller';
        $fileContr = __DIR__.'/controllers/'.$contrName.'.php';

        $method = explode('?', $uri[2])[0];

        if (file_exists($fileContr) && in_array($method,self::$routes[$contrName]))  {
            $contrName = self::$contrNamespace.$contrName;
            $oContr = new $contrName($request);
            $oContr->$method();

        } else {
            $defaultContr = self::$contrNamespace.'Controller';
            $oContr = new $defaultContr($request);
        }
    }
}
