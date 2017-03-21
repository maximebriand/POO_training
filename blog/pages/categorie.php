<?php
/**
 * Created by PhpStorm.
 * User: maximebriand
 * Date: 20/03/2017
 * Time: 13:31
 */

$categorie = \App\Table\Categorie::find([$_GET['id']], 'App\Table\Article', true);

var_dump($categorie);