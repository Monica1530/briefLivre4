Résultat des commandes par éditeur :
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
		<?php foreach ($cediteur_list as $ce):?>
			<tr>
				<td> <?=$ce->ISBN?> </td>
                <td> <?=$ce->Titre?> </td>
				<td> <?=$ce->NomAuteur?> </td>
				<td> <?=$ce->PrenomAuteur?> </td>
				<td> <?=$ce->Raison_sociale?> </td>
				<td> <?=$ce->Date_achat?> </td>
				<td> <?=$ce->Prix_achat?> </td>
				<td> <?=$ce->Nbr_exemplaires?> </td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>