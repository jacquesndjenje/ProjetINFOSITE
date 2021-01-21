<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Connexion</title>
</head>

<body>
    <?php

    try{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=projet_info;charset=utf8', 'root', 'root');
    }
    catch(Exception $e){
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
    }
    $valider = 1;
    if (isset($_POST['mot_de_passe']) AND isset($_POST['idUti'])) {
        $reponse = $bdd->query('SELECT * FROM utilisateur');
        while ($donnees = $reponse->fetch()) {
            if($donnees['idUtilisateur'] == $_POST['idUti']){
                if ($donnees['MDP'] == $_POST['mot_de_passe']) {
                    $nom= $donnees['Nom'];
                    $valider = 0;
                    $id=$_POST['idUti'];
                    if($donnees['idUtilisateur']<1000){
                        $type=1;//Prof sinon eleve
                    };
                };
            };
        };
    };
    if ($valider == 0) // Si le mot de passe est bon
    {
        $_SESSION['ID_Actuel']=$_POST['idUti'];
        if($type==1){
            $_SESSION['Statut']=1; //PROF SI STATUT = 1
            header("location:ListeModules.php");
        }
        else{
            $_SESSION['Statut']=0; //ELEVE SI STATUT = 0
            header("location:ListeModules.php");
        }
        
        
    } else // Sinon, on affiche un message d'erreur
    {
        $message='Mot de passe ou identifiant incorrect';
        include "Index.php";
    }
    ?>


</body>

</html>