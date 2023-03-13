<form action="?controller=livre&action=all_editeur_list" method="POST">
			<legend>Recherche un livre par son editeur</legend>
			<select name="e">
		<?php foreach ($editeur as $e):?>
			<option value="<?= $e->Editeur ?>"><?= $e->Editeur ?></option>
		<?php endforeach; ?>
		</select>
		<input type="submit" value="Envoyer" />
</form>
	