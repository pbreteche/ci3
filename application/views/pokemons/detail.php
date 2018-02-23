<h1><?= $pokemon->name ?></h1>
<a href="<?= site_url() ?>">Accueil</a>
<dl>
	<dt>Taille</dt><dd><?= $pokemon->size ?></dd>
	<dt>Poids</dt><dd><?= $pokemon->weight ?></dd>
	<dt>Genre</dt><dd><?= $pokemon->gender ?></dd>
	<dt>Category</dt><dd><?= $pokemon->category ?></dd>
</dl>
