<?php

declare(strict_types=1);

use App\Products;

require_once __DIR__ . '/../vendor/autoload.php';

$title = 'WebDev';

$filterProducts = array_filter(Products::all(), function ($product){
    return $product['is_available'];
});

include __DIR__ . '/../resources/index.php';


