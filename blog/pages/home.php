<div class="row">
    <div class="col-sm-8">
        <?php foreach(\App\Table\Article::getLast() as $post): ?>
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

            <a href="<?= $categorie->getUrl(); ?>"><?= $categorie->titre; ?></a>
        </li>
        <?php endforeach;?>
    </div>
</div>