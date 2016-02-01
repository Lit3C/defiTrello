<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    // try
    // {
    //     $connexion = new PDO('mysql:host=localhost; dbname=defiTrello;charset=utf8', 'root', 'pàoçi_uè!:;,');
    // } catch ( Exception $e ){
    //     die('Erreur : '.$e->getMessage() );
    // }
    // $recupLog=$connexion->quote($recupLog); // équivaut à .$recupLog.
    // $recupMdp=$connexion->quote($recupMdp); // équivaut à .$recupMdp.
    //
    // $requete = "SELECT * FROM auteurs WHERE nom=$recupLog AND mot_passe=$recupMdp";
    // $reponses = $connexion->query($requete);
    // if( $auteur = $reponses->fetch() ){
    //   echo "GG it works !";
    // }else{echo "Retry Again ;)";}

      $recupTask = $_GET["task"];

    try
    {
        $connexion = new PDO('mysql:host=localhost; dbname=defiTrello;charset=utf8', 'root', 'pàoçi_uè!:;,');
    } catch ( Exception $e ){
        die('Erreur : '.$e->getMessage() );
    }
    $recupTask=$connexion->quote($recupTask);

    $requeteSaisie = "INSERT INTO taskList (`id`,`task`) VALUES ( NULL, $recupTask)";
    $sendDB = $connexion->query($requeteSaisie);
    echo "GG it works !";

    $requeteAffiche = "SELECT * FROM taskList";
    $resultats = $connexion->query($requeteAffiche);
    while( $list = $resultats->fetch() ){
      echo "<ul><li>"
                .$list["task"]."
            </li></ul>";
    }

    ?>


  </body>
</html>
