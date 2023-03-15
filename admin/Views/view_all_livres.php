Résultat de votre recherche :
<br/>


<table class='table table-bordered table-responsive-md bg_table'>
	<thead>
		<tr>
			<th>ISBN</th>
			<th>Titre</th>
			<th>Thème</th>
			<th>Nombre de page</th>
			<th>Format</th>
			<th>Nom Auteur</th>
			<th>Prenom Auteur</th>
			<th>Editeur</th>
			<th>Année d'édition</th>
			<th>Prix</th>
			<th>Langue</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($livres as $l):?>
			<tr>
			
				<td> <?=$l->ISBN?> </td>
				<td> <?=$l->Titre?> </td>
				<td> <?=$l->Theme?> </td>
				<td> <?=$l->Nb_pages?> </td>
				<td> <?=$l->Format?> </td>
				<td> <?=$l->NomAuteur?> </td>
				<td><?=$l->PrenomAuteur?></td>
				<td> <?=$l->Editeur?> </td>
				<td> <?=$l->AnneeEdition?> </td>
				<td> <?=$l->Prix?> </td>
				<td> <?=$l->Langue?> </td>
				<td><a href= "?controller=livre&action=livre_update&id=<?= $l->id ?>"><i class="fa-solid fa-pen"></i></a></td>
           
            ?
			<td><a href= "?controller=livre&action=livre_delete&id=<?= $l->id ?>"><i class="fa-solid fa-trash"></i></a></td></tr>
			
		 <?php endforeach; ?>
	</tbody>
</table>