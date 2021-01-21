<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Logs</title>
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
    $Valide=0;
    if(isset($_POST['Key'])){
        $reponse = $bdd->query('SELECT * FROM Autoriser');

        while($donnees=$reponse->fetch()){
            if($donnees['token']==$_POST['Key']) {
                if($donnees['idUtilisateur_ext']==$_SESSION['ID_Actuel']){
                    if($donnees ['new_inscription']==1){
                        $NumModule=(string)$donnees['idModule_ext'];
                        $Module='M'.$NumModule;

                        if ($Module==1) {
                            $req = $bdd->prepare('UPDATE Utilisateur SET M1 =0 WHERE idUtilisateur = :ID_Actuel');
                            $req->execute(array(
                            'ID_Actuel' => $_SESSION['ID_Actuel']
                            ));
                        }
                        if ($Module==2) {
                            $req = $bdd->prepare('UPDATE Utilisateur SET M2 =0 WHERE idUtilisateur = :ID_Actuel');
                            $req->execute(array(
                            'ID_Actuel' => $_SESSION['ID_Actuel']
                            ));
                        }
                        if ($Module==3) {
                            $req = $bdd->prepare('UPDATE Utilisateur SET M3 =0 WHERE idUtilisateur = :ID_Actuel');
                            $req->execute(array(
                            'ID_Actuel' => $_SESSION['ID_Actuel']
                            ));
                        }
                        if ($Module==4) {
                            $req = $bdd->prepare('UPDATE Utilisateur SET M4 =0 WHERE idUtilisateur = :ID_Actuel');
                            $req->execute(array(
                            'ID_Actuel' => $_SESSION['ID_Actuel']
                            ));
                    
                        }
                        if ($Module==5) {
                            $req = $bdd->prepare('UPDATE Utilisateur SET M5 =0 WHERE idUtilisateur = :ID_Actuel');
                            $req->execute(array(
                            'ID_Actuel' => $_SESSION['ID_Actuel']
                            ));
                        
                        }
                        if ($Module==6) {
                            $req = $bdd->prepare('UPDATE Utilisateur SET M6 =0 WHERE idUtilisateur = :ID_Actuel');
                            $req->execute(array(
                            'ID_Actuel' => $_SESSION['ID_Actuel']
                            ));
                        }
                        if ($Module==7) {
                            $req = $bdd->prepare('UPDATE Utilisateur SET M7 =0 WHERE idUtilisateur = :ID_Actuel');
                            $req->execute(array(
                            'ID_Actuel' => $_SESSION['ID_Actuel']
                            ));
                        
                        }
                        if ($Module==8) {
                            $req = $bdd->prepare('UPDATE Utilisateur SET M8 =0 WHERE idUtilisateur = :ID_Actuel');
                            $req->execute(array(
                            'ID_Actuel' => $_SESSION['ID_Actuel']
                            ));
                        }
                        if ($Module==9) {
                            $req = $bdd->prepare('UPDATE Utilisateur SET M9 =0 WHERE idUtilisateur = :ID_Actuel');
                            $req->execute(array(
                            'ID_Actuel' => $_SESSION['ID_Actuel']
                            ));
                        }
                        if ($Module==10) {
                            $req = $bdd->prepare('UPDATE Utilisateur SET M10 =0 WHERE idUtilisateur = :ID_Actuel');
                            $req->execute(array(
                            'ID_Actuel' => $_SESSION['ID_Actuel']
                            ));
                        }
                        $Valide=1;
                    };
                };
            };
        };
    };

    if($Valide==1){
        header("location:ListeModules.php");
    }

    else{
        $message='Token inexistant';
        include "InscriptionEleveModule.php";
    }
    ?>
</body>
</html>