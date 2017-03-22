<?php
/**
 * Created by PhpStorm.
 * User: maximebriand
 * Date: 22/03/2017
 * Time: 23:37
 */
use App\App;
use App\Table\Article;
use App\Table\Categorie;

$categorie = Categorie::find($_GET['id']);
if($categorie === false){
    App::notFound();
}
$articles = Article::lastByCategory($_GET['id']);
$categories = Categorie::all();
?>
<h1><?= $categorie->titre; ?></h1>
<div class="row">
    <div class="col-sm-8">
        <?php foreach($articles as $post): ?>
    <h2>
        <a href="<?= $post->url; ?>"><?= $post->titre; ?></a>
        <p><em><?= $post->categorie; ?></em></p>
    </h2>
    <p>
        <?= $post->extrait ;?>
    </p>

<?php endforeach;?>
</div>
<div class="col-sm-4">
    <?php foreach (\App\Table\Categorie::all() as $categorie): ?>
        <li>
            <a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a>
        </li>
    <?php endforeach;?>
</div>
</div>