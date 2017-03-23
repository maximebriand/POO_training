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
    private $db_instance;
    private static $_instance;

    public static function getInstance(){
        if (is_null(self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    public function getTable($name) {
        $class_name = '\\App\\Table\\' . ucfirst($name) . 'Table';
        return new $class_name();
    }

    public function getDb(){
        $config = Config::getInstance();
        if(is_null($this->db_instance)){
            $this->db_instance = new Database($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
        }
        return $this->db_instance;
    }

}