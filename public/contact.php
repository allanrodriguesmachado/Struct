<?php

declare(strict_types=1);

use App\Products;

require_once __DIR__ . '/../vendor/autoload.php';

$title = 'WebDev';
$header = 'Contact';

$filterProducts = array_filter(Products::all(), function ($product){
    return $product['is_available'];
});


resource_path('contact.php');


