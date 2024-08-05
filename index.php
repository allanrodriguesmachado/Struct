<?php

use App\Models\UserModel;

require_once __DIR__  . '/vendor/autoload.php';

$model = new UserModel();
$user = $model->load('1');


dd($user);
//dd($user->load('1', "{$user->first_name}"));
