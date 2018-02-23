<?= validation_errors() ?>

<?= form_open() ?>

<div>
	<label for="pokemon[name]">Nom</label>
	<input type="text" name="name" id="pokemon[name]">
</div>
<div>
	<label for="pokemon[size]">Taille</label>
	<input type="number" name="size" id="pokemon[size]">
</div>
<div>
	<label for="pokemon[weight]">Poids</label>
	<input type="number" name="weight" id="pokemon[weight]">
</div>
<div>
	<label for="pokemon[category]">Nom</label>
	<input type="text" name="category" id="pokemon[category]">
</div>
<div>
	<button>Créer</button>
</div>

<?= form_close() ?>
