<h1>Modifier un livre</h1>
<form method="POST" action="?controller=livre&action=livre_update&id=<?=$id?>">

 
        <div class="formulaire">
            <fieldset>
                <p>
                    <label for="number">ISBN </label>
                    <input type="integer" size="20" id="number" name="number" required value="<?php echo $book->ISBN  ?>">
                </p>
                <p>

                    <label for="titre">Titre</label>
                    <input type="text" size="20" id="titre" name="titre" required value="<?php echo $book->Titre  ?>">
                </p>
                <p>
                    <label for="theme">Theme </label>
                    <input type="text" size="20" id="theme" name="theme" value="<?php echo $book->Theme  ?>">
                </p>
                <p>
                    <label for="pages">Nb Pages </label>
                    <input type="integer" size="20" id="pages" name="pages" required value="<?php echo $book->Nb_pages ?>">
                </p>
                <p>
                    <label for="format">Format</label>
                    <input type="text" size="20" id="format" name="format" value="<?php echo $book->Format ?>">
                </p>
                <p>
                    <label for="nom">Nom auteur</label>
                    <input type="text" size="20" id="nom" name="nom" required value="<?php echo $book->NomAuteur ?>">
                </p>
                <p>
                    <label for="prenom">Prénom auteur</label>
                    <input type="text" size="20" id="prenom" name="prenom" required value="<?php echo $book->PrenomAuteur ?>">
                </p>
                <p>
                    <label for="editeur">Editeur</label>
                    <input type="text" size="20" id="editeur" name="editeur" required value="<?php echo $book->Editeur ?>">
                </p>
                <p>
                    <label for="annee">Année édition</label>
                    <input type="integer" size="20" id="annee" name="annee" required value="<?php echo $book->AnneeEdition ?>">
                </p>


                <p>
                    <label for="prix">Prix</label>
                    <input type="integer" size="20" id="prix" name="prix" value="<?php echo $book->Prix ?>">
                </p>
                <p>
                    <label for="langue">Langue</label>
                    <input type="text" size="20" id="langue" name="langue" value="<?php echo $book->Langue ?>">
                </p>

                
                <div class="button">
                    <label for="submit"></label>
                    <input type="submit" name="submit" value="Modifier">
             
                </div>
                </fieldselt>
        </div>

    </form>