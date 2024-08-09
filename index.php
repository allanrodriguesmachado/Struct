<?php

use App\Models\UserModel;

require_once __DIR__  . '/vendor/autoload.php';

$model = new UserModel();
$email = $model->all();

dd($email);
