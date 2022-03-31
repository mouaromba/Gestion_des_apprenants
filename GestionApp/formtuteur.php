<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
         <?php
            include 'menu.php'
         ?>
        <div id="lien">
        <a type="button" class="btn btn-dark" href="tutliste.php">Voir la liste</a>
        </div>
        <div id="texte3">
            <p>Veuillez remplir le formulaire ci-dessous pour ajouter un nouveau tuteur</p>
        </div>

        <div id="container">
            
            <form action="insertion_tuteur.php" method="POST">
            <br>
            <div id="texte4">
            <p>Ajouter Nouveau Tuteur</p>
            </div> 

                <label><b>Nom</b></label>
                <input type="text" placeholder="Entrer le nom du tuteur" name="nomTuteur" required>

                <label><b>Prenom</b></label>
                <input type="text" placeholder="Entrer le prénom du tuteur" name="prenomTuteur" required>

                <label><b>Adresse</b></label>
                <input type="text" placeholder="Entrer l'adresse" name="adresseTuteur" required>

                <label><b>Numéro de téléphone</b></label>
                <input type="number" placeholder="Entrer le numéro de téléphone" name="phoneTuteur" required>

                <label><b>Genre</b></label>
                <select name="genre" id="genre" selected>
                    <option value="Masculin">Masculin</option>
                    <option value="Feminin">Féminin</option>
                </select>

                <label><b>Profession</b></label>
                <input type="text" placeholder="Entrer la profession" name="profession" required>
                <br><br><br>
               <div id="bouton">
                    <div id="bouton1" >
                    <input type="submit" name='submit' value='Ajouter' >
                    </div>
                    <div id="bouton2">
                    <input type="reset" name='reset' value='Annuler'>
                    </div>
               </div>
            </form>
        </div>
        <div id="texte2">
            <p>Copyright@2022|Designed with by CIJ </p>
        </div>
    </body>
</html>