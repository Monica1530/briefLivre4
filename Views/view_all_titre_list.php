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
                    <?php foreach ($titre_list as $t) : ?>
                        <tr>
                            <td class="td"> <?= $t->ISBN ?> </td>
                            <td class="td"> <?= $t->Titre ?> </td>
                            <td class="td"> <?= $t->Theme ?> </td>
                            <td class="td"> <?= $t->Nb_pages ?> </td>
                            <td class="td"> <?= $t->Format ?> </td>
                            <td class="td"> <?= $t->NomAuteur ?><?=$t->PrenomAuteur?> </td>
                            <td class="td"> <?= $t->Editeur ?> </td>
                            <td class="td"> <?= $t->AnneeEdition ?> </td>
                            <td class="td"> <?= $t->Prix ?> </td>
                            <td class="td"> <?= $t->Langue ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
				