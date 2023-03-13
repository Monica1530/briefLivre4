<form action="?controller=fournisseur&action=all_pays_list" method="POST">
			<legend>Recherche un fournisseur par son pays</legend>
			<select name="p">
		<?php foreach ($pays as $p):?>
			<option value="<?= $p->Pays ?>"><?= $p->Pays ?></option>
		<?php endforeach; ?>
		</select>
		<input type="submit" value="Envoyer" />
</form>
	