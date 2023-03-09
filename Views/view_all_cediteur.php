<form action="?controller=commande&action=all_cediteur_list" method="POST">
			<legend>Recherche d'une commande par editeur</legend>
			<select name="ce">
		<?php foreach ($cediteur as $ce):?>
			<option value="<?= $ce->id ?>"><?= $ce->Editeur ?></option>
		<?php endforeach; ?>
		</select>
		<input type="submit" value="Envoyer" />
</form>
	