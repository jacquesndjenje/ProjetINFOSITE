<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="pagedeco.css">
 
</head>

<body>
    <form action="Index_secret.php" method="post">

    <div class="login-box"> <!-- bloc pour le login-->
    	<h1>Connexion</h1> <!--h1 pour titre principal-->

    	<div class="textbox"> <!-- block pour le text id  -->
    		<i class="fa fa-user" aria-hidden="true"> </i> <!-- logo user  sur le site fontawesome-->
    		<input type="text" placeholder="identifiant" name="idUti" value=<?php $nom?> > <!-- insert du texte dans le bloc username -->
    	</div>

    	<div class="textbox"> <!-- block pour le text mdp  -->
    		<i class="fa fa-lock" aria-hidden="true"></i> <!-- logo mdp sur le site fontawesome  -->
    		<input type="password" placeholder="mot de passe" name="mot_de_passe" > <!-- insert du texte dans le bloc mdp -->
    	</div>
		<input class="btn" type="submit" value="Sign in"><!-- creation du bouton sign in -->
		<?php echo $message?>
	</div>
</body>
</html>