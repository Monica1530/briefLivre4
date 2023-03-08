Résultat de votre recherche :
<br/>


<table class='table table-bordered table-responsive-md bg_table'>
	<thead>
		<tr>
			<th>Date achat</th>
			<th>Prix</th>
			<th>Nbr exemplaires</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($commande as $c):?>
			<tr>
				<td> <?=$c->Date_achat?> </td>
				<td> <?=$c->Prix_achat?> </td>
				<td> <?=$c->Nbr_exemplaires?> </td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>