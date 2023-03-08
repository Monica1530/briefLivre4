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
                    <?php foreach ($auteur_list as $a) : ?>
                        <tr>
                            <td class="td"> <?= $a->ISBN ?> </td>
                            <td class="td"> <?= $a->Titre ?> </td>
                            <td class="td"> <?= $a->Theme ?> </td>
                            <td class="td"> <?= $a->Nb_pages ?> </td>
                            <td class="td"> <?= $a->Format ?> </td>
                            <td class="td"> <?= $a->NomAuteur ?><?=$a->PrenomAuteur?> </td>
                            <td class="td"> <?= $a->Editeur ?> </td>
                            <td class="td"> <?= $a->AnneeEdition ?> </td>
                            <td class="td"> <?= $a->Prix ?> </td>
                            <td class="td"> <?= $a->Langue ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
				