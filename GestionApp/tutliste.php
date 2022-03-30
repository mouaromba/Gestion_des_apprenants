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
            
            <form action="insertion_tuteur.php" method="POST"><br>
                <div id="liste1">
                    <p>Liste des tuteurs</p>
                </div>
                <div id="liste2">
                    <p>Total x tuteur(s)</p>
                </div>
                <a href="formtuteur.php" class="btn btn-danger">
                    <img src="./images/plus1" alt="" width="40" height="30">
                </a>
                <br><br>
                <table class="table table bordered " border="1">
                    <thead class="table-danger">
                        <tr>
                        <th scope="col">CODE</th>
                        <th scope="col">NOM</th>
                        <th scope="col">PRENOM</th>
                        <th scope="col">ADRESSE</th>
                        <th scope="col">TELEPHONE</th>
                        <th scope="col">GENRE</th>
                        <th scope="col">PROFESSION</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php

                            try {
                            // se connecter à mysql
                            $pdo = new PDO("mysql:host=localhost;dbname=bdapptrue", "root", "");
                            } catch (PDOException $exc) {
                            echo $exc->getMessage();
                            exit();
                            }

                            // mysql select query
                            //$stmt = $con->prepare('SELECT name, model, os, type, ip, idrac FROM P_SERVERS');
                            $q = $pdo->prepare('SELECT * FROM tuteur');

                            $q->execute();
                            $data = $q->fetchAll();

                        ?>

                        <?php
                        foreach ($data as $donnee) {
                        ?>
                            <tr>
                                <td><?php echo $donnee['codeTuteur']; ?></td>
                                <td><?php echo $donnee['nomTuteur']; ?></td>
                                <td><?php echo $donnee['prenomTuteur']; ?></td>
                                <td><?php echo $donnee['adresseTuteur']; ?></td>
                                <td><?php echo $donnee['phoneTuteur']; ?></td>
                                <td><?php echo $donnee['genre']; ?></td>
                                <td><?php echo $donnee['profession']; ?></td>
                            </tr>

                        <?php
                        }
                      ?>
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