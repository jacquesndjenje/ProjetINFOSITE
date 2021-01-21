<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Logs</title>
    <link rel="stylesheet" href="InscriptionEleveModule.css" />
  
</head>
<body>
<form action="log_secret.php" method="post">
<nav role="navigation">
  <div id="menuToggle">
    <input type="checkbox" />
    <span></span>
    <span></span>
    <span></span>
    <ul id="menu">
      <a href="#"><li>Module</li></a>
      <a href="#"><li>Suivi</li></a>
      <a href="#"><li>Déconnexion</li></a>
      <img src="JUNIA.png">
    </ul>
    
  </div>
</nav>
    <div class="login-box"> <!-- bloc pour le login-->
    	<h1>Rejoindre un module :</h1> <!--h1 pour titre principal-->

    	<div class="textbox"> <!-- block pour le text mdp  -->
    		<i class="fa fa-key" aria-hidden="true"></i> <!-- logo mdp sur le site fontawesome  -->
    		<input type="password" placeholder="Entrez la clé" name="Key" value=""> <!-- insert du texte dans le bloc mdp -->
    	</div>
          <input class="btn" type="button" name="" value="Sign in"><!-- creation du bouton sign in -->
          <p class=msg><?php echo $message?></p>
        </div>
        <div class="carre"></div>
</body>
</html>