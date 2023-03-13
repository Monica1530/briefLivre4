<form action="?controller=livre&action=all_titre_list" method="POST">
			<legend>Recherche un livre par son titre</legend>
			<select name="t">
		<?php foreach ($titre as $t):?>
			<option value="<?= $t->Titre ?>"><?= $t->Titre ?></option>
		<?php endforeach; ?>
		</select>
		<input type="submit" value="Envoyer" />
</form>
	

