<?php
/**
 * Created by PhpStorm.
 * User: maximebriand
 * Date: 22/03/2017
 * Time: 22:07
 */

namespace App\Table;


class Categorie
{
    public static $table = 'blog.categories';
    public static function all(){
        return App::getDb()->query("
              SELECT *
              FROM " . self::$table . "
            ", __CLASS__);
    }
}