<div class="row">
    <div class="col-sm-8">
        <?php foreach(\App\Table\Article::getLast() as $post): ?>
            <h2>
                <a href="<?= $post->url; ?>"><?= $post->titre; ?></a>,
                <em><?= $post->categorie; ?></em>
            </h2>
            <p>
                <?= $post->extrait ;?>
            </p>

        <?php endforeach;?>
    </div>
    <div class="col-sm-4">
        <ul>
            <?php foreach (\App\Table\Categorie::all() as $categorie): ?>
                <?= $categorie->url; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</div>