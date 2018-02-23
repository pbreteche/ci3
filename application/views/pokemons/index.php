<ul>
	<?php foreach ($pokemons as $pokemon): ?>
	<li>
		<a href="#"><?= $pokemon->getName() ?></a>
	</li>
	<?php endforeach; ?>
</ul>
