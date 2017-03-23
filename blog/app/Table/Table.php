<?php

namespace App\Table;
/**
 * Created by PhpStorm.
 * User: maximebriand
 * Date: 23/03/2017
 * Time: 13:38
 */
class Table
{
    protected $table;

    public function __construct()
    {
        if(is_null($this->table)) {
            $parts = explode('\\', get_class(($this)));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name));
        }

    }
}