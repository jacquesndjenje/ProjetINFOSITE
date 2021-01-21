<?php
    try
{
$bdd = new PDO('mysql:host=localhost;dbname=projet_info;charset=utf8', 'root', 'root');
}
    
catch( PDOException $e)
    
{
    print 'Erreur :' .$e->getMessage(). "<br/>";
    die();
}


function AfficheListeSuiviProf($bdd, $NumModule)
{

    $req1=$bdd->query('SELECT * FROM utilisateur WHERE idUtilisateur>999');
    $req2=$bdd->prepare('SELECT * FROM modules WHERE idModule=:idModule');
    $req2->execute(array(':idModule'=>$NumModule));
    $etudiants=$req1->fetchAll();
    $module=$req2->fetch();
    foreach($etudiants as $etudiant)
    {
        $Mod=$etudiant['M'.$NumModule]; 
        $value=($Mod/$module['nbFichiers'])*100;
        {
        ?>
        <div class="etudiant_box">
            <p><?=$etudiant['Prenom'] ?> <?=$etudiant['Nom']?> <progress id="jauge"  value="<?=$value?>" max="100"></progress><input class="switch" type="button" name=" " value="on"> </p>
        </div>
        <?php
        }
    }
}
include "burgerMenu.php";
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>suivi etudiant</title>
   <link rel="stylesheet" href="suiviProf.css"> 
 
</head>

<body>
   <div class="header">  
  Mohamed Amine 
  <br>
  Bennouna  </div>
  <img class="logo" src="LOGO2.png">
    <header>
    <h1>Suivi module</h1> <!--h1 pour titre principal-->

</header>

     <?php 
    $NumModule=filter_input(INPUT_GET,'NumModule');
    if($NumModule)
    {
        AfficheListeSuiviProf($bdd,$NumModule);
    }
    else
    {
        echo('Erreur');
    }
    ?>

	<input class="inscription" type="button" name="" value="inscription">
	

	<input class="btnadd" type="button" name="" value="ajouter +"> 
    <!-- bouton ajouter -->
	
</body>
</html>