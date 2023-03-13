<?php 
// je récupère la valeur du clic d'afficher la liste de la localité
// if ($position !== 1): ?>
<table class='table '>
                <thead>
                    <tr>
                        <th>ISBN</th>
                        <th>Titre</th>
                        <th>Thème</th>
                        <th>Nombre de page</th>
                        <th>Format</th>
                        <th>Auteur</th>
                        <th>Editeur</th>
                        <th>Année d'édition</th>
                        <th>Prix</th>
                        <th>Langue</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($editeur_list as $e) : ?>
                        <tr>
                            <td class="td"> <?= $e->ISBN ?> </td>
                            <td class="td"> <?= $e->Titre ?> </td>
                            <td class="td"> <?= $e->Theme ?> </td>
                            <td class="td"> <?= $e->Nb_pages ?> </td>
                            <td class="td"> <?= $e->Format ?> </td>
                            <td class="td"> <?= $e->NomAuteur ?><?=$e->PrenomAuteur?> </td>
                            <td class="td"> <?= $e->Editeur ?> </td>
                            <td class="td"> <?= $e->AnneeEdition ?> </td>
                            <td class="td"> <?= $e->Prix ?> </td>
                            <td class="td"> <?= $e->Langue ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
				