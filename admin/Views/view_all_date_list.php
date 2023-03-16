Résultat des commandes par date :
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
		<?php foreach ($date_list as $d):?>
			<tr>
				<td> <?=$d->ISBN?> </td>
                <td> <?=$d->Titre?> </td>
				<td> <?=$d->NomAuteur?> </td>
				<td> <?=$d->PrenomAuteur?> </td>
				<td> <?=$d->Raison_sociale?> </td>
				<td> <?=$d->Date_achat?> </td>
				<td> <?=$d->Prix_achat?> </td>
				<td> <?=$d->Nbr_exemplaires?> </td>
			</tr>
		<?php endforeach;  ?>
	</tbody>
</table>