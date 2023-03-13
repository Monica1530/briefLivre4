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
                    <?php foreach ($pays_list as $p) : ?>
                        <tr>
                            <td class="td"> <?= $p->Code_fournisseur ?> </td>
                            <td class="td"> <?= $p->Raison_sociale ?> </td>
                            <td class="td"> <?= $p->Rue_fournisseur ?> </td>
                            <td class="td"> <?= $p->Code_postal ?> </td>
                            <td class="td"> <?= $p->Localite ?> </td>
                            <td class="td"> <?= $p->Pays ?> </td>
                            <td class="td"> <?= $p->Tel_fournisseur ?> </td>
                            <td class="td"> <?= $p->Url_fournisseur ?> </td>
                            <td class="td"> <?= $p->Email_fournisseur ?> </td>
                            <td class="td"> <?= $p->Reseau_fournisseur ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
				