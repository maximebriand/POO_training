<?php
/**
 * Created by PhpStorm.
 * User: maximebriand
 * Date: 22/03/2017
 * Time: 22:07
 */

namespace App\Table;
use App\App;


class Categorie
{
    public static $table = 'blog.categories';
    public static function all(){
        return App::getDb()->query("
              SELECT *
              FROM " . self::$table . "
            ", __CLASS__);
    }

    public  function __GET($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }
    public function getUrl(){
        return 'index.php?p=categorie&id='.$this->id;
    }
}