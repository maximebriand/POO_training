<?php
/**
 * Created by PhpStorm.
 * User: maximebriand
 * Date: 22/03/2017
 * Time: 22:35
 */

namespace App\Table;
use App\App;


class Table
{
    public static function all(){
        return App::getDb()->query("
              SELECT *
              FROM " . static::$table . "
            ", __CLASS__);
    }

    public function __GET($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

}