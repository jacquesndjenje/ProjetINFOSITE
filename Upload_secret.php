<html>

<head>
    <meta charset="utf-8">
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

    $test = 1;
    if (isset($_POST['nom_Module'])) {
        $reponse = $bdd->query('SELECT * FROM modules');//Selection base de donnée
        while ($donnees = $reponse->fetch() and $test == 1) {
            if ($donnees['nomModule'] == 'i') {//On choisi la première ligne vide de la base de donnée
                $idMod = $donnees['idModule'];
                $req = $bdd->prepare('UPDATE modules SET nomModule = :nomMod WHERE idModule = :ID_Actuel');//Ajout du nom du module au premier endroit libre
                $req->execute(array('nomMod' => $_POST['nom_Module'], 'ID_Actuel' => $idMod));
                $test = 0;
            }
        }
    }


    $nomOrigine = $_FILES['monfichier1']['name'];
    $elementsChemin = pathinfo($nomOrigine);
    $extensionFichier = $elementsChemin['extension'];
    $extensionsAutorisees = array("html");

    if ($test== 0) {//Si première partie faie on passe a l'envoie du fichier au serveur
        if (!(in_array($extensionFichier, $extensionsAutorisees))) {
            echo "Le fichier n'a pas l'extension attendue";
        } else {
            // Copie dans le repertoire du script avec un nom
            // incluant l'heure a la seconde pres 
            $repertoireDestination = dirname(__FILE__) . "/";
            $nomDestination = $_FILES['monfichier1']['name'];

            if (move_uploaded_file($_FILES["monfichier1"]["tmp_name"], $repertoireDestination . $nomDestination)) {
                header("location:ListeModules.php");//Renvoie a la liste des module si cela a marché
            } else {
               $message='Le repertoire existe pas';//Message d'erreur si ajout du fichier n'a pas marché
               include "fileupload.php";
            }
        }
    } else {
        $message = 'Plus de place';//Si première partie non executée affichage d'un message d'erreur dans la page
        include "upload.php";
    }
    ?>
</body>

</html>
