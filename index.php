<?php

use App\Database\Connect;

require_once __DIR__  . '/vendor/autoload.php';

$connect = Connect::getInstance();

dd($connect->query('SELECT * FROM users')->fetchAll());