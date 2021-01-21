<?php

session_start(); // nous permet d'utiliser une variable globale

//$debug = 'n';

/*Insertion du code HTML*/
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<link rel="stylesheet" type="text/css" href="carre.css">';
echo '</head>';
echo '<body>';

/* Gestion des erreurs lorsqu'on va se connecter a la base de donnee*/
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=projet_info;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

/*Utilisation de la table module*/

$module1 = $bdd->query("SELECT * FROM modules WHERE idModule = 1");//Appel de la table modules pour juste utiliser la ligne ou idModule = 1 et on fait la 
                                                                   //même  chose jusqu'a idModule = 10 et on recupere le nomModule
while ($donne1 = $module1->fetch())
{
    $matiere1 = $donne1['nomModule'];
}

$module2 = $bdd->query("SELECT * FROM modules WHERE idModule = 2");
while ($donne2 = $module2->fetch())
{
    $matiere2 = $donne2['nomModule'];
}

$module3 = $bdd->query("SELECT * FROM modules WHERE idModule = 3");
while ($donne3 = $module3->fetch())
{
    $matiere3 = $donne3['nomModule'];
}

$module4 = $bdd->query("SELECT * FROM modules WHERE idModule = 4");
while ($donne4 = $module4->fetch())
{
    $matiere4 = $donne4['nomModule'];
}

$module5 = $bdd->query("SELECT * FROM modules WHERE idModule = 5");
while ($donne5 = $module5->fetch())
{
    $matiere5 = $donne5['nomModule'];
}

$module6 = $bdd->query("SELECT * FROM modules WHERE idModule = 6");
while ($donne6 = $module6->fetch())
{
    $matiere6 = $donne6['nomModule'];
}

$module7 = $bdd->query("SELECT * FROM modules WHERE idModule = 7");
while ($donne7 = $module7->fetch())
{
    $matiere7 = $donne7['nomModule'];
}

$module8 = $bdd->query("SELECT * FROM modules WHERE idModule = 8");
while ($donne8 = $module8->fetch())
{
    $matiere8 = $donne8['nomModule'];
}

$module9 = $bdd->query("SELECT * FROM modules WHERE idModule = 9");
while ($donne9 = $module9->fetch())
{
    $matiere9 = $donne9['nomModule'];
}

$module10 = $bdd->query("SELECT * FROM modules WHERE idModule = 10");
while ($donne10 = $module10->fetch())
{
    $matiere10 = $donne10['nomModule'];
}

$ID_Actuel = intval($_SESSION["ID_Actuel"]); // Utilsation de la variable globale ID_Actuel

/*$ex = "SELECT * FROM utilisateur WHERE idUtilisateur = $ID_Actuel";
if ($debug = 'y')
{
    echo $ex;
}
//echo $ex;*/

//$ID_Actuel = 999;

$reponse = $bdd->query("SELECT * FROM utilisateur WHERE idUtilisateur = $ID_Actuel" ); //Appel de la table utilisateur nous permettant d'utiliser la ligne ou 
                                                                                       //idUtilisateur = $ID_Actuel

//$reponse = $bdd->query("SELECT * FROM utilisateur WHERE idUtilisateur = $ID_Actuel" ); 

while ($donne = $reponse->fetch()) // Boucle utilisant la fonction fetch nous permet d'acceder a des elements precis de la table
{
    /*Affichage des modules en fonction du code du module*/

    if ($donne['M1'] > -2)
    {
        if ($ID_Actuel >= 1000) //Si $ID_Actuel >= 1000 on a affaire a un eleve sinon on a un prof
        {
            echo '<div class="square">  <h2> <a href="ArboModuleEleve.php?NumModule=1">';
            echo $matiere1;
            echo '</a> <h2/> </div>';
            echo  '</div>';
        }
        else 
        {
            echo '<div class="square">  <h2> <a href="ArboModuleProf.php?NumModule=1">';
            echo $matiere1;
            echo '</a> <h2/> </div>';
            echo  '</div>';
        }
    } 

    if ($donne['M2'] > -2)
    {
         if ($ID_Actuel >= 1000)
        {
            echo '<div class="square">  <h2> <a href="ArboModuleEleve.php?NumModule=2">';
            echo $matiere2;
            echo '</a> <h2/> </div>';
            echo  '</div>';
        }
        else 
        {
            echo '<div class="square">  <h2> <a href="ArboModuleProf.php?NumModule=2">';
            echo $matiere2;
            echo '</a> <h2/> </div>';
            echo  '</div>';
        }
    } 

    if ($donne['M3'] > -2)
    {
        if ($ID_Actuel >= 1000)
        {
            echo '<div class="square">  <h2> <a href="ArboModuleEleve.php?NumModule=3">';
            echo $matiere3;
            echo '</a> <h2/> </div>';
            echo  '</div>';
        }
        else 
        {
            echo '<div class="square">  <h2> <a href="ArboModuleProf.php?NumModule=3">';
            echo $matiere3;
            echo '</a> <h2/> </div>';
            echo  '</div>';
        }
    } 

    if ($donne['M4'] > -2)
    {
        if ($ID_Actuel >= 1000)
        {
            echo '<div class="square">  <h2> <a href="ArboModuleEleve.php?NumModule=4">';
            echo $matiere4;
            echo '</a> <h2/> </div>';
            echo  '</div>';
        }
        else 
        {
             echo '<div class="square">  <h2> <a href="ArboModuleProf.php?NumModule=4">';
            echo $matiere4;
            echo '</a> <h2/> </div>';
            echo  '</div>';
        }
    } 

    if ($donne['M5'] > -2)
    {
        if ($ID_Actuel >= 1000)
        {
            echo '<div class="square">  <h2> <a href="ArboModuleEleve.php?NumModule=5">';
            echo $matiere5;
            echo '</a> <h2/> </div>';
            echo  '</div>';
        }
        else 
        {
            echo '<div class="square">  <h2> <a href="ArboModuleProf.php?NumModule=5">';
            echo $matiere5;
            echo '</a> <h2/> </div>';
            echo  '</div>';
        }
    } 

    if ($donne['M6'] > -2)
    {
        if ($ID_Actuel >= 1000)
        {
            echo '<div class="square">  <h2> <a href="ArboModuleEleve.php?NumModule=5">';
            echo $matiere6;
            echo '</a> <h2/> </div>';
            echo  '</div>';
        }
        else 
        {
            echo '<div class="square">  <h2> <a href="ArboModuleProf.php?NumModule=5">';
            echo $matiere6;
            echo '</a> <h2/> </div>';
            echo  '</div>';
        }
    } 

    if ($donne['M7'] > -2)
    {
        if ($ID_Actuel >= 1000)
        {
            echo '<div class="square">  <h2> <a href="ArboModuleEleve.php?NumModule=6">';
            echo $matiere7;
            echo '</a> <h2/> </div>';
            echo  '</div>';
        }
        else 
        {
            echo '<div class="square">  <h2> <a href="ArboModuleProf.php?NumModule=6">';
            echo $matiere7;
            echo '</a> <h2/> </div>';
            echo  '</div>';
        }
    } 

    if ($donne['M8'] > -2)
    {
        if ($ID_Actuel >= 1000)
        {
            echo '<div class="square">  <h2> <a href="ArboModuleEleve.php?NumModule=7">';
            echo $matiere8;
            echo '</a> <h2/> </div>';
            echo  '</div>';
        }
        else 
        {
            echo '<div class="square">  <h2> <a href="ArboModuleProf.php?NumModule=7">';
            echo $matiere8;
            echo '</a> <h2/> </div>';
            echo  '</div>';
        }
    } 
    
    if ($donne['M9'] > -2)
    {
        if ($ID_Actuel >= 1000)
        {
            echo '<div class="square">  <h2> <a href="ArboModuleEleve.php?NumModule=7">';
            echo $matiere9;
            echo '</a> <h2/> </div>';
            echo  '</div>';
        }
        else 
        {
            echo '<div class="square">  <h2> <a href="ArboModuleProf.php?NumModule=7">';
            echo $matiere9;
            echo '</a> <h2/> </div>';
            echo  '</div>';
        }
    } 

    if ($donne['M10'] > -2)
    {
        if ($ID_Actuel >= 1000)
        {
            echo '<div class="square">  <h2> <a href="ArboModuleEleve.php?NumModule=8">';
            echo $matiere10;
            echo '</a> <h2/> </div>';
            echo  '</div>';
        }
        else 
        {
            echo '<div class="square">  <h2> <a href="ArboModuleProf.php?NumModule=8">';
            echo $matiere10;
            echo '</a> <h2/> </div>';
            echo  '</div>';
        }
    } 

    /*Affichage du bouton plus*/

    if ($ID_Actuel >= 1000) //Pour eleve
    {
        echo '<div class="square2"> <a href="InscriptionEleveModule.php?NumModule=9">';
        echo '<img class="plus" src="plus.png">';
        echo'</a>' ;
        echo'</div>';
    }
    else // Pour Prof
    {
        echo '<div class="square2"> <a href="upload.php?NumModule=9">';
        echo '<img class="plus" src="plus.png">';
        echo'</a>' ;
        echo'</div>';
    }


}

echo '</body>';

echo '</html>';

?>