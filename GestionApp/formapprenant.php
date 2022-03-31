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
        <a type="button" class="btn btn-dark" href="appliste.php">Voir la liste</a>
        </div>
        <div id="texte3">
            <p>Veuillez remplir le formulaire ci-dessous pour ajouter un nouveau apprenant</p>
        </div>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="insertion_app.php" method="POST">
            <br>
            <div id="texte4">
            <p>Ajouter Nouveau Apprenant</p>
            </div> 
              <label><b>Nom du tuteur</b></label>
              <select name="codeTuteur">
                <?php

                  try {
                    // se connecter à mysql
                    $pdo = new PDO("mysql:host=localhost;dbname=bdapptrue","root","");
                    } catch (PDOException $exc) {
                    echo $exc->getMessage();
                    exit();
                  }
                  $tuteurs = $pdo->query('SELECT * FROM tuteur');
                  while ($donnees = $tuteurs -> fetch()){
                  echo '<option value="' .$donnees['codeTuteur']. '">'. $donnees['nomTuteur']. "  " . $donnees['prenomTuteur']. '</option>';
                }
               ?>
              </select>

                <label><b>Nom</b></label>
                <input type="text" placeholder="Entrer le nom de l'apprenant" name="nom" required>

                <label><b>Prenom</b></label>
                <input type="text" placeholder="Entrer le prénom de l'apprenant" name="prenom" required>

                <label><b>Adresse</b></label>
                <input type="text" placeholder="Entrer l'adresse" name="adresse" required>

                <label><b>Numéro de téléphone</b></label>
                <input type="number" placeholder="Entrer le numéro de téléphone" name="phone" required>

                <label><b>Genre</b></label>
                <select name="genre"  selected>
                    <option value="Masculin">Masculin</option>
                    <option value="Feminin">Féminin</option>
                </select>
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