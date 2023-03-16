<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insérer livre</title>
    <!--<form action="bdd.php" method="post">-->
</head>

<body>

    <img src="image\livre.png">
    <div class="formulaire">
        
        <h1>Ajouter un livre</h1>
        <form method="POST" action="?controller=livre&action=traitement_inserer_livre">
                <fieldset>
                <p>
                    <label for="number">ISBN </label>
                    <input type="integer" size="20" id="number" name="number" required>
                </p>
                <p>

                    <label for="titre">Titre</label>
                    <input type="text" size="20" id="titre" name="titre" required>
                </p>
                <p>
                    <label for="theme">Theme </label>
                    <input type="text" size="20" id="theme" name="theme">
                </p>
                <p>
                    <label for="pages">Nb Pages </label>
                    <input type="integer" size="20" id="pages" name="pages" required>
                </p>
                <p>
                    <label for="format">Format</label>
                    <input type="text" size="20" id="format" name="format">
                </p>
                <p>
                    <label for="nom">Nom auteur</label>
                    <input type="text" size="20" id="nom" name="nom" required>
                </p>
                <p>
                    <label for="prenom">Prénom auteur</label>
                    <input type="text" size="20" id="prenom" name="prenom" required>
                </p>
                <p>
                    <label for="editeur">Editeur</label>
                    <input type="text" size="20" id="editeur" name="editeur" required>
                </p>
                <p>
                    <label for="annee">Année édition</label>
                    <input type="integer" size="20" id="annee" name="annee" required>
                </p>
                <p>
                    <label for="prix">Prix</label>
                    <input type="integer" size="20" id="prix" name="prix">
                </p>
                <p>
                    <label for="langue">Langue</label>
                    <input type="text" size="20" id="langue" name="langue" required>
                </p>
                <div class="button">
                    <input type="submit" value="ajouter">
                </div>
            </fieldselt>
            </form>



    </div>

</body>

</html>