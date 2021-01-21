<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cours</title>
   <link rel="stylesheet" href="ArboModuleProf.css"> 
 
</head>

<body>
<nav role="navigation">
		<div id="menuToggle">
			<input type="checkbox" />
			<span></span>
			<span></span>
			<span></span>
			<ul id="menu">
				<a href="ListeModules.php">
					<li>Module</li>
				</a>
				<!-- Le if sert à amener sur une différente page en fonction de si c'est un prof ou un eleve -->
				<?php if ($_SESSION["ID_Actuel"] < 1000) {
				?>
					<a href="AfficheListeSuiviProf.php?NumModule=1">
						<li>Suivi</li>
					</a>
				<?php
				} else {
				?>
					<a href="suiviEleve.php">
						<li>Suivi</li>
					</a>
				<?php }
				?>

				<a href="Index.php">
					<?php session_destroy();?>
					<li>Déconnexion</li>
				</a>
				<img src="JUNIA.png">
			</ul>

		</div>
	</nav>
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