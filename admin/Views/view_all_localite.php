<form action="?controller=fournisseur&action=all_localite_list" method="POST">
			<legend>Recherche un fournisseur par sa localité</legend>
			<select name="l">
		<?php foreach ($localite as $l):?>
			<option value="<?= $l->Localite ?>"><?= $l->Localite ?></option>
		<?php endforeach; ?>
		</select>
		<input type="submit" value="Envoyer" />
</form>
	