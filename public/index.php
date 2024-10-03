<?php

declare(strict_types=1);

use App\Products;

require_once __DIR__ . '/../vendor/autoload.php';

$title = 'WebDev';
$header = 'Home';

$filterProducts = array_filter(Products::all(), function ($product){
    return $product['is_available'];
});

$uri = $_SERVER['REQUEST_URI'];

$routes = [
  '/' => 'index',
  'contact' => 'contact'
];

if(array_key_exists($uri, $routes)){
     var_dump(   dirname(__DIR__) . '/app/Controllers/' . $routes[$uri] . '.php');
     return dirname(__DIR__) . '/app/Controllers/' . $routes[$uri] . '.php';

}
//
//var_dump($uri);

resource_path('index.php');

//include __DIR__ . '/../resources/index.php';


