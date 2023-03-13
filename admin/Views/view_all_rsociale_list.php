<?php 
// je récupère la valeur du clic d'afficher la liste de la raison sociale
if ($position !== 1): ?>
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
                    <?php foreach ($Raison_sociale_list as $rs) : ?>
                        <tr>
                            <td class="td"> <?= $rs->Code_fournisseur ?> </td>
                            <td class="td"> <?= $rs->Raison_sociale ?> </td>
                            <td class="td"> <?= $rs->Rue_fournisseur ?> </td>
                            <td class="td"> <?= $rs->Code_postal ?> </td>
                            <td class="td"> <?= $rs->Localite ?> </td>
                            <td class="td"> <?= $rs->Pays ?> </td>
                            <td class="td"> <?= $rs->Tel_fournisseur ?> </td>
                            <td class="td"> <?= $rs->Url_fournisseur ?> </td>
                            <td class="td"> <?= $rs->Email_fournisseur ?> </td>
                            <td class="td"> <?= $rs->Reseau_fournisseur ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
				<?php endif; ?>