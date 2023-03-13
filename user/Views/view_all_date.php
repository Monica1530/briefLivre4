<form action="?controller=commande&action=all_date_list" method="POST">
			<legend>Recherche d'une commande par date</legend>
			<select name="d">
		<?php foreach ($date as $d):?>
			<option value="<?= $d->Id_livre ?>"><?= $d->Date_achat ?></option>
		<?php endforeach; ?>
		</select>
		<input type="submit" value="Envoyer" />
</form>
	