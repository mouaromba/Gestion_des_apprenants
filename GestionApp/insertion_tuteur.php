<?php
$host = "localhost";
$dbname = "bdapptrue";
$username = "root";
$password = "";


if(isset($_POST['submit'])){

  try {
  // se connecter à mysql
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", "root", "");
  } catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
  }

  // récupérer les valeurs 
  $nomTuteur = $_POST['nomTuteur'];
  $prenomTuteur = $_POST['prenomTuteur'];
  $adresseTuteur = $_POST['adresseTuteur'];
  $phoneTuteur = $_POST['phoneTuteur'];
  $genre = $_POST['genre'];
  $profession = $_POST['profession'];

  // Requête mysql pour insérer des données
  $sql = "INSERT INTO `tuteur`(`nomTuteur`, `prenomTuteur`,`adresseTuteur`, `phoneTuteur`,`genre`, `profession`) VALUES (:nomTuteur,:prenomTuteur,:adresseTuteur,:phoneTuteur,:genre,:profession)";
  $res = $pdo->prepare($sql);
  $exec = $res->execute(array(":nomTuteur"=>$nomTuteur,":prenomTuteur"=>$prenomTuteur,":adresseTuteur"=>$adresseTuteur,":phoneTuteur"=>$phoneTuteur,":genre"=>$genre,":profession"=>$profession));

  // vérifier si la requête d'insertion a réussi
  if($exec){
    header("Location: tutliste.php");
    exit();
  }else{
    echo "Échec de l'opération d'insertion";
  }
}
?>