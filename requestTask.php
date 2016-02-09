<?php
  $recupTask = $_GET["task"];

try
{
    $connexion = new PDO('mysql:host=localhost; dbname=*********;charset=utf8', '******', '*********');
} catch ( Exception $e ){
    die('Erreur : '.$e->getMessage() );
}
$recupTask=$connexion->quote($recupTask);

$requeteSaisie = "INSERT INTO taskList (`id`,`task`) VALUES ( NULL, $recupTask)";
$sendDB = $connexion->query($requeteSaisie);

$requeteAffiche = "SELECT * FROM taskList";
$resultats = $connexion->query($requeteAffiche);
while( $list = $resultats->fetch() ){
  echo "<li>".$list["task"]."</li>";
}

?>
