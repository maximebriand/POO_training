<?php

/**
 * Created by PhpStorm.
 * User: maximebriand
 * Date: 23/03/2017
 * Time: 11:37
 */
class Car_factory
{
    public static function getCar(){
        return new Car();
    }
}