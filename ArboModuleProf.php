<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cours</title>
   <link rel="stylesheet" href="ArboModuleProf.css"> 
 
</head>

<body>
<?php include "burgerMenu.php";?>
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
?>
 <div class= "arbo"><?php echo AfficherListeFichierModule($_GET['NumModule']);?></div>  
  
  
  
  
><!--AaAAAAAAAAAAAAAAAAAAAAAAAAAAAAA Mettre du CSS sur la class Arborescence pour voir le début sur la page. Il faut que le texte commence plus bas-->
	
</body>
</html>