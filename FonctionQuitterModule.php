<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">
 
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Notre première instruction : echo</title>
</head>
 
<body>

<?php

//fonction qui va supprimer de la BDD le token du module en question de l'élève en question (fait passer sa valeur dans la BDD module à -2)
function QuitterModule($id,$NumModule) {
    
    try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=projet_info;charset=utf8', 'root', 'root');
    } catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
    }
    $test=$bdd->query('SELECT Nom, Prenom FROM utilisateur');

    //tous les if qui vont mettre à jour le statut de l'élève dans la matière en question
    if ($NumModule==1) {
        $req = $bdd->prepare('UPDATE Utilisateur SET M1 =-2 WHERE idUtilisateur = :ID_Actuel');
        $req->execute(array(
        'ID_Actuel' => $id
        ));
    }
    if ($NumModule==2) {
        $req = $bdd->prepare('UPDATE Utilisateur SET M2 =-2 WHERE idUtilisateur = :ID_Actuel');
        $req->execute(array(
        'ID_Actuel' => $id
        ));
    }
    if ($NumModule=='3') {
        $req = $bdd->prepare('UPDATE Utilisateur SET M3 =-2 WHERE idUtilisateur = :ID_Actuel');
        $req->execute(array(
        'ID_Actuel' => $id
        ));
    }
    if ($NumModule=='4') {
        $req = $bdd->prepare('UPDATE Utilisateur SET M4 =-2 WHERE idUtilisateur = :ID_Actuel');
        $req->execute(array(
        'ID_Actuel' => $id
        ));

    }
    if ($NumModule=='5') {
        $req = $bdd->prepare('UPDATE Utilisateur SET M5 =-2 WHERE idUtilisateur = :ID_Actuel');
        $req->execute(array(
        'ID_Actuel' => $id
        ));
    
    }
    if ($NumModule=='6') {
        $req = $bdd->prepare('UPDATE Utilisateur SET M6 =-2 WHERE idUtilisateur = :ID_Actuel');
        $req->execute(array(
        'ID_Actuel' => $id
        ));
    }
    if ($NumModule=='7') {
        $req = $bdd->prepare('UPDATE Utilisateur SET M7 =-2 WHERE idUtilisateur = :ID_Actuel');
        $req->execute(array(
        'ID_Actuel' => $id
        ));
    
    }
    if ($NumModule=='8') {
        $req = $bdd->prepare('UPDATE Utilisateur SET M8 =-2 WHERE idUtilisateur = :ID_Actuel');
        $req->execute(array(
        'ID_Actuel' => $id
        ));
    }
    if ($NumModule=='9') {
        $req = $bdd->prepare('UPDATE Utilisateur SET M9 =-2 WHERE idUtilisateur = :ID_Actuel');
        $req->execute(array(
        'ID_Actuel' => $id
        ));
    }
    if ($NumModule=='10') {
        $req = $bdd->prepare('UPDATE Utilisateur SET M10 =-2 WHERE idUtilisateur = :ID_Actuel');
        $req->execute(array(
        'ID_Actuel' => $id
        ));
    }
    
    
}
$numeromodule=intval($_GET['NumModule']);
QuitterModule(1000,1);
//QuitterModule($_SESSION["ID_Actuel"],1);
header("location:ArboModuleEleve.php");
/*$nouvelleligne=$bdd->query('SELECT * FROM utilisateur WHERE idUtilisateur =:ID_Actuel');
    $nouvelleligne->execute(array(
    'ID_Actuel'=>$id
    ));*/

?>
 
</body>
 
</html>