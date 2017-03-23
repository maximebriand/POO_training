<?php

require '../App/Autoloader.php';
App\Autoloader::register();


$app = \App\App::getInstance();

$post = $app->getTable('posts');
var_dump($post);