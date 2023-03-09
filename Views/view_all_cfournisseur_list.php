Résultat des commandes par fournisseur :
<br/>


<table class='table table-bordered table-responsive-md bg_table'>
	<thead>
		<tr>
			<th>ISBN</th>
			<th>Titre du livre</th>
			<th>Nom auteur</th>
			<th>Prenom auteur</th>
			<th>Raison sociale fournisseur</th>
			<th>Date d'achat</th>
			<th>Prix</th>
			<th>Nombre exemplaire</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($cfournisseur_list as $cf):?>
			<tr>
				<td> <?=$cf->ISBN?> </td>
                <td> <?=$cf->Titre?> </td>
				<td> <?=$cf->NomAuteur?> </td>
				<td> <?=$cf->PrenomAuteur?> </td>
				<td> <?=$cf->Raison_sociale?> </td>
				<td> <?=$cf->Date_achat?> </td>
				<td> <?=$cf->Prix_achat?> </td>
				<td> <?=$cf->Nbr_exemplaires?> </td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>