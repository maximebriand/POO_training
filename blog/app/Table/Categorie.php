<?php
/**
 * Created by PhpStorm.
 * User: maximebriand
 * Date: 22/03/2017
 * Time: 14:12
 */

namespace App\Table;
use App\App;

class Categorie extends Table
{
    protected static $table = 'blog.categories';

    public function getUrl(){
        return 'index.php?p=categorie&id='.$this->id;
    }

}