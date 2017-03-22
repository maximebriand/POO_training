<?php
/**
 * Created by PhpStorm.
 * User: maximebriand
 * Date: 22/03/2017
 * Time: 13:54
 */

namespace App;


class App
{

    const DB_NAME = 'blog';
    const DB_USER = 'root';
    const DB_PASS = 'root';
    const DB_HOST = 'root';


    private static $database;

    public static function getDb(){
        if(self::$database === null){
            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }
        return self::$database;
    }
}