<?php 
// je récupère la valeur du clic d'afficher la liste de la localité
// if ($position !== 1): ?>
<table class='table '>
                <thead>
                    <tr>
                        <th>code fournisseur</th>
                        <th>raison sociale</th>
                        <th>rue fournisseur</th>
                        <th>code postal</th>
                        <th>localite</th>
                        <th>pays</th>
                        <th>téléphone fournisseur</th>
                        <th>Url fournisseur</th>
                        <th>Email fournisseur</th>
                        <th>Reseau</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($localite_list as $l) : ?>
                        <tr>
                            <td class="td"> <?= $l->Code_fournisseur ?> </td>
                            <td class="td"> <?= $l->Raison_sociale ?> </td>
                            <td class="td"> <?= $l->Rue_fournisseur ?> </td>
                            <td class="td"> <?= $l->Code_postal ?> </td>
                            <td class="td"> <?= $l->Localite ?> </td>
                            <td class="td"> <?= $l->Pays ?> </td>
                            <td class="td"> <?= $l->Tel_fournisseur ?> </td>
                            <td class="td"> <?= $l->Url_fournisseur ?> </td>
                            <td class="td"> <?= $l->Email_fournisseur ?> </td>
                            <td class="td"> <?= $l->Reseau_fournisseur ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
				<!--  -->