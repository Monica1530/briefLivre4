<form action="?controller=livre&action=all_auteur_list" method="POST">
			<legend>Recherche un livre par son auteur</legend>
			<select name="a">
		<?php foreach ($auteur as $a):?>
			<option value="<?= $a->NomAuteur ?>"><?= $a->NomAuteur ?></option>
		<?php endforeach; ?>
		</select>
		<input type="submit" value="Envoyer" />
</form>
	