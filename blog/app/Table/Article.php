<?php
namespace App\Table;
use App\App;

class Article extends Table
{
    protected static $table = 'blog.articles';

    public static function getLast(){
        return App::getDb()->query("
              SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie
              FROM " . static::$table ."
              LEFT JOIN blog.categories
                ON articles.category_id = categories.id 
            ", __CLASS__);
    }

    public function getUrl(){
        return 'index.php?p=article&id='.$this->id;
    }
    public function getExtrait(){
        $html = '<p>' . substr($this->contenu, 0, 100) . '...</p>';
        $html .= '<p><a href="' . $this->getUrl() . '">Voir la suite</a>';
        return $html;
    }
}