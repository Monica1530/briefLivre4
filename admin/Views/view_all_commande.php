Résultat de votre recherche :
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
		<?php foreach ($commande as $c):?>
			<tr>
				<td> <?=$c->ISBN?> </td>
				<td> <?=$c->Titre?> </td>
				<td> <?=$c->NomAuteur?> </td>
				<td> <?=$c->PrenomAuteur?> </td>
				<td> <?=$c->Raison_sociale?> </td>
				<td> <?=$c->Date_achat?> </td>
				<td> <?=$c->Prix_achat?> </td>
				<td> <?=$c->Nbr_exemplaires?> </td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>