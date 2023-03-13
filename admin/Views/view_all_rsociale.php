

		<form action="?controller=fournisseur&action=all_rsociale_list" method="POST">
			<legend>Recherche un fournisseur par sa raison sociale</legend>
			<select name="rs">
		<?php foreach ($Raison_sociale as $rs):?>
			<option value="<?= $rs->Raison_sociale ?>"><?= $rs->Raison_sociale ?></option>
		<?php endforeach; ?>
		</select>
		<input type="submit" value="Envoyer" />
</form>
	