<?php
/**
 * Created by PhpStorm.
 * User: maximebriand
 * Date: 22/03/2017
 * Time: 14:22
 */

namespace App\Table;
use App\App;

class Table
{

    protected static $table;

    private static function getTable(){
        if(static::$table === null ){
            $class_name = explode('\\', get_called_class());
            static::$table = 'blog.' . strtolower(end($class_name)) . 's';
        }
        var_dump(static::$table);
        return static::$table;
    }

    public function __GET($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    public static function all(){
        return App::getDb()->query("
            SELECT  *
            FROM " . static::getTable() . "
            ", __CLASS__);
    }
}