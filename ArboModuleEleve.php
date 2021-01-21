<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cours</title>
   <link rel="stylesheet" href="ArboModuleEleve.css"> 
 
</head>

<body>
<?php include "burgerMenu.php";?>
  <form action="FonctionQuitterModule.php" method="post" >
  <div class="header">  
  Mohamed Amine 
  <br>
  Bennouna  </div>
  <img class="logo" src="LOGO2.png">
      <h1>nom module</h1> <!--h1 pour titre principal-->

      <?php 

function AfficherListeFichierModule($module){
  $fichierListArbo='module_'. $module . '.html';
  require($fichierListArbo);
  return($module);
}


//AfficherListeFichierModule($_GET['NumModule']);
//AfficherListeFichierModule(1);
//$fichierListArbo='list.html';

?> 
<div class= "arbo"><?php echo AfficherListeFichierModule($_GET['NumModule']);?></div>
<input class="btnsuppr" type="submit" name="Btn" value="QUITTER -"> <!-- bouton ajouter -->
 
</body>
</html>