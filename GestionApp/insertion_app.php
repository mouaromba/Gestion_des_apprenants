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
  $codeTuteur = $_POST['codeTuteur'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $adresse = $_POST['adresse'];
  $phone = $_POST['phone'];
  $genre = $_POST['genre'];

  // Requête mysql pour insérer des données
  $sql = "INSERT INTO `apprenant`(`codeTuteur`, `nom`, `prenom`,`adresse`, `phone`,`genre`) VALUES (:codeTuteur,:nom,:prenom,:adresse,:phone,:genre)";
  $res = $pdo->prepare($sql);
  $exec = $res->execute(array(":codeTuteur"=>$codeTuteur,":nom"=>$nom,":prenom"=>$prenom,":adresse"=>$adresse,":phone"=>$phone,":genre"=>$genre));

  // vérifier si la requête d'insertion a réussi
  if($exec){
    header("Location: appliste.php");
    exit();
  }else{
    echo "Échec de l'opération d'insertion";
  }
}
?>