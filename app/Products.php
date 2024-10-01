<?php

namespace App;

class Products
{
    public static function all(): array
    {
        return [
            [
                'name' => 'Xbox',
                'price' => 500,
                'is_available' => true,
            ],
            [
                'name' => 'Playstation',
                'price' => 300,
                'is_available' => true,
            ],
            [
                'name' => 'Nintendo Switch',
                'price' => 250,
                'is_available' => false,
            ],
        ];
    }
}