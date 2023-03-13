<form action="?controller=commande&action=all_cfournisseur_list" method="POST">
			<legend>Recherche d'une commande par fournisseur</legend>
			<select name="cf">
		<?php foreach ($cfournisseur as $cf):?>
            <!-- l'Id-fournisseur et la Raison_Sociale viennent de la base de données fournisseur-->
			<option value="<?= $cf->Id_fournisseur ?>"><?= $cf->Raison_sociale ?></option>
		<?php endforeach; ?>
		</select>
		<input type="submit" value="Envoyer" />
</form>
	