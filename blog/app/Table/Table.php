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
    protected static $table;

    private static function getTable(){
        if(static::$table === null){
            $class_name = explode('\\', get_called_class());
            self::$table = strtolower(end($class_name));
        }
        return self::$table;
    }

    public static function all(){
        return App::getDb()->query("
              SELECT *
              FROM " . static::$table . "
            ", get_called_class());
    }

    public function __GET($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

}