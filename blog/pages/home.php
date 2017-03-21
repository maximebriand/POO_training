<div class="rom">
	<div class="col-sm-8">
		<?php foreach (App\Table\Article::getLast() as $post): ?>
			<h2>
				<a href="<?= $post->getURL(); ?>"><?= $post->titre; ?></a>
				<p><em><?= $post->categorie; ?></em></p>

			</h2>
			<p><?= $post->getExtrait(); ?></p>
		<?php endforeach; ?>
	</div>

	<div class="col-sm-4">
		<ul>
			<?php foreach (\App\Table\Categorie::all() as $categorie): ?>
				<li><a href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>