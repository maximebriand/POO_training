<?php

require '../App/Autoloader.php';
App\Autoloader::register();

$app = \App\App::getInstance();
$app->title = "titre de test";
