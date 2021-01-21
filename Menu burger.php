<?php session_start()?>
<!DOCTYPE html>
<html>

<head>
	<title>ListeModules</title>
	<!-- <h1>Modules </h1> -->
	<link rel="stylesheet" type="text/css" href="ListeModules.css">
	<div class="header">
		Mohamed Amine
		<br>
		Bennouna </div>
	<img class="logo" src="LOGO.png">

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
					<a href="ListeSuivieProf.php">
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
	<div class="square-container">
		<div class="square" onclick="document.location='pagedeco.html'">
			<h2> Module
				<h2 />
				<?php if ($_SESSION["ID_Actuel"] < 1000) {
				?>
		</div>
		<div class="square2" onclick="document.location='pagedeco.html'"> <img class="plus" src="plus.png"></div>
	</div>
<?php
				} else {
?>
	</div>
	<div class="square2" onclick="document.location='InscriptionEleveModule.php'"> <img class="plus" src="plus.png"></div>
	</div>
<?php }
?>

</body>

</html>