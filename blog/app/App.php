<?php
/**
 * Created by PhpStorm.
 * User: maximebriand
 * Date: 22/03/2017
 * Time: 21:39
 */

namespace App;


class App
{
    public $title = "Mon Super Site";
    private static $_instace;

    public static function getInstance(){
        if (is_null(self::$_instace)){
            self::$_instace = new App();
        }
        return self::$_instace;
    }

}