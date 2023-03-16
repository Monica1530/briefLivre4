<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insérer commande</title>
   
</head>

<body>

    <img src="image\livre.png">
    <div class="formulaire">
        
        <h1>Ajouter une commande</h1>
        <form method="POST" action="?controller=commande&action=traitement_inserer_commande">
                <fieldset>
               
                <p>

                <select name="titre_livre">
		<?php foreach ($livre as $l):?>
           <option value="<?= $l->id ?>"><?= $l->id ?></option>
		<?php endforeach; ?>
		</select>
                    <!-- <select name="titre" id="titre_livre">
                    <input type="text" size="20" id="titre" name="titre" required> -->
                </p>
                <p>
                  
                    <select name="raison_sociale" id="raison_sociale_fournisseur">
                    <input type="text" size="20" id="raison_sociale" name="raison_sociale">
                </p>
                <p>
                    <label for="date_commande">Date commande</label>
                    <input type="integer" size="20" id="date_commande" name="date_commande">
                </p>
                <p>
                    <label for="prix">Prix</label>
                    <input type="integer" size="20" id="prix" name="prix">
                </p>
                <p>
                    <label for="quantite">Quantité</label>
                    <input type="integer" size="20" id="quantite" name="quantite">
                </p>
                <div class="button">
                    <input type="submit" value="Envoyer">
                </div>
            </fieldselt>
            </form>
    </div>

</body>

</html>