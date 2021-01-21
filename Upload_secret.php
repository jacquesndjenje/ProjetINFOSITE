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
        $reponse = $bdd->query('SELECT * FROM modules');
        while ($donnees = $reponse->fetch() and $test == 1) {
            if ($donnees['nomModule'] == 'i') {
                $idMod = $donnees['idModule'];
                $req = $bdd->prepare('UPDATE modules SET nomModule = :nomMod WHERE idModule = :ID_Actuel');
                $req->execute(array('nomMod' => $_POST['nom_Module'], 'ID_Actuel' => $idMod));
                $test = 0;
            }
        }
    }


    $nomOrigine = $_FILES['monfichier1']['name'];
    $elementsChemin = pathinfo($nomOrigine);
    $extensionFichier = $elementsChemin['extension'];
    $extensionsAutorisees = array("html");

    if ($test== 0) {
        if (!(in_array($extensionFichier, $extensionsAutorisees))) {
            echo "Le fichier n'a pas l'extension attendue";
        } else {
            // Copie dans le repertoire du script avec un nom
            // incluant l'heure a la seconde pres 
            $repertoireDestination = dirname(__FILE__) . "/";
            $nomDestination = $_FILES['monfichier1']['name'];

            if (move_uploaded_file($_FILES["monfichier1"]["tmp_name"], $repertoireDestination . $nomDestination)) {
                header("location:ListeModules.php");
            } else {
               $message='Le repertoire existe pas';
               include "fileupload.php";
            }
        }
    } else {
        $message = 'Plus de place';
        include "upload.php";
    }
    ?>
</body>

</html>