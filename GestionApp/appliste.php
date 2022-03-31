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
         
        <div id="container-fluid">
            <!-- zone de connexion -->
            
            <form action="formapprenant.php" method="POST"><br>
                <div id="liste1">
                    <p>Liste des apprenants</p>
                </div>
                
                <div id="liste2">
                    <p>Total x apprenant(s)</p>
                </div>
                <a type="button" class="btn btn-secondary" href="formapprenant.php">
                    <img src="./images/plus1" alt="" width="40" height="30">
                </a>
                <br><br>
                <table class="table">
                    <thead class="table-danger">
                        <tr>
                        <th scope="col">CODE</th>
                        <th scope="col">NOM</th>
                        <th scope="col">PRENOM</th>
                        <th scope="col">ADRESSE</th>
                        <th scope="col">TELEPHONE</th>
                        <th scope="col">GENRE</th>
                        <th scope="col">NOM DU TUTEUR</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <?php
                        try {
                            // se connecter à mysql
                            $pdo = new PDO("mysql:host=localhost;dbname=bdapptrue", "root", "");
                            } catch (PDOException $exc) {
                            echo $exc->getMessage();
                            exit();
                            }
                            
                            $sql = $pdo->query('SELECT * FROM apprenant ORDER BY nom ASC');
                            $i = 0;
                            while ($donnees = $sql->fetch()) {

                                if ($donnees['codeTuteur']) {
                                $reqtuteur = $pdo->query("SELECT nomTuteur,prenomTuteur FROM tuteur WHERE codeTuteur=$donnees[codeTuteur]");
                                while ($tut = $reqtuteur->fetch()) {
                                    $nomTuteur = $tut['nomTuteur'];
                                    $prenomTuteur = $tut['prenomTuteur'];
                                }
                                }
                                $i++;
                                echo "<tr>";
                                echo "<td> $i </td>";
                                echo "<td> $donnees[nom] </td>";
                                echo "<td> $donnees[prenom] </td>";
                                echo "<td> $donnees[adresse] </td>";
                                echo "<td> $donnees[phone] </td>";
                                echo "<td> $donnees[genre] </td>";
                                echo "<td>" . $nomTuteur . " " . $prenomTuteur . "</td>";
                                echo "</tr>";
                            }
                            $sql->closeCursor();
                           
                    ?>
                    </tr> 
                    </tbody>
                </table> 
                <br><br><br>              
            </form>
            <br><br>
        </div>
        <div id="texte2">
            <p>Copyright@2022|Designed with by CIJ </p>
        </div>
    </body>
</html>