<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Upload.css">
	<div class="header">  
	Mohamed Amine 
	<br>
	Bennouna  </div>
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
			<a href="ListeModules.html"><li>Module</li></a>
			<a href="#"><li>Suivi</li></a>
			<a href="logSite.html"><li>Déconnexion</li></a>
			<img src="JUNIA.png">
		  </ul>
		  
		</div>
      </nav>
    <div class="block"> 
        <form enctype="multipart/form-data" action="Upload_secret.php" method="post">
            <h1>Ajouter un fichier :</h1>
            <div class="bouton">
                <input type="hidden" name="File1" value="100000" />
                <input type="file" name="monfichier1" />
            </div>
                 <br>
            <div class="valider">
            <input type="submit" />
            </div>
            <div class="module">
                <input type="text" placeholder="nom du module" name="nom_Module">
            </div>
    </div>
    <p class="carre">
        <div class="message">
             <?php echo $message?></p>
        </div>
</body>
</html>