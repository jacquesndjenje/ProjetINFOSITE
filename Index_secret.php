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
    $valider = 1;// déclaration d'une variable valider et initialiser à 1
    if (isset($_POST['mot_de_passe']) AND isset($_POST['idUti'])) { // condition à exécuter si un mot de passe et un identifiant a été entré
        $reponse = $bdd->query('SELECT * FROM utilisateur'); // on déclare une variable reponse qui va prendre les données de la table utilisateur dans notre BD
        while ($donnees = $reponse->fetch()) { // boucle pour parcourir les données de reponse
            if($donnees['idUtilisateur'] == $_POST['idUti']){ // si un matricule dans notre BD correspond au matricule que l'utilisateur a entré on exécute l'instruction suivante
                if ($donnees['MDP'] == $_POST['mot_de_passe']) { // si le mot de passe de l'utilisateur correspond à celui de la BD on exécute l'instruction
                    $nom= $donnees['Nom']; // on déclare une variable nom qui va prendre le nom de l'utilisateur dans la BD
                    $valider = 0; // la variable reponse prend la valeur 0
                    $id=$_POST['idUti']; // la varialble id prend le matricule de l'utilisateur entré
                    if($donnees['idUtilisateur']<1000){
                        $type=1; //si le matricule de l'utilisateur est inférieur à 1000 la variable type prend la valeur 1
                    };
                };
            };
        };
    };
    if ($valider == 0) // Si le mot de passe est bon on exécute cette condition
    {
        $_SESSION['ID_Actuel']=$_POST['idUti'];
        if($type==1){ // si la variable type est 1 on exécute cette condition
            $_SESSION['Statut']=1; //PROF SI STATUT = 1
            header("location:ListeModules.php"); // on affiche la page correspondant à l'élève
        }
        else{ 
            $_SESSION['Statut']=0; //ELEVE SI STATUT = 0
            header("location:ListeModules.php"); // on affiche la page correspondant à l'élève
        }
        
        
    } else // Si le mot de passe ou le matricule est inccorect on exécute cette condition
    {
        $message='Mot de passe ou identifiant incorrect'; // message d'erreur indiquer sur le code  html
        include "Index.php"; // on affiche la même page avec un message d'erreur 
    }
    ?>


</body>

</html>
