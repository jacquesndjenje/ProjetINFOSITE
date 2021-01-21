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
                echo '
                <a href="ListeSuivieProf.php">
                    <li>Suivi</li>
                </a>';
            } else {
                echo '
                <a href="suiviEleve.php">
                    <li>Suivi</li>
                </a>';
            }
            echo '
            <a href="index.php">
                <?php session_destroy(); ?>
                <li>Déconnexion</li>
            </a>
            ';
            ?>
            <img src="JUNIA.png">
        </ul>
    </div>
</nav>

<style type="text/css">
    body {
        font-family: sans-serif;
        /* police */
        background-color: #a1bfbe;
        /* couleur gris  */
    }

    .header {
        width: 100%;
        background-color: #036d68;
        height: 50px;
        text-align: right;
        position: absolute;
        top: 0%;
        left: 0%;
    }

    .logo {
        position: absolute;
        top: 0;
        left: 85%;
        width: 50px;
        height: 50px;
    }

    h1 {
        /* parametre boite login */
        font-size: 50px;
        /* taille texte */
        position: absolute;
        /* positionnement absolu pour gerer les decalages(haut bas droite gauche)*/
        top: -25px;
        left: 50%;
        /* milieu horizontal */
        transform: translate(-50%, -50%);
        /* translater le bloc*/
        color: #fd5d38;
        /* couleur */
        margin-top: 50px;
    }

    p {
        font-size: 20px;
        /* taille texrte */
    }

    .btnsuppr {
        cursor: pointer;
        /* main lorsque le curseur est sur le bouton */
        color: #fd5d38;
        /* couleur texte */
        position: absolute;
        /* position absolue */
        right: 10%;
        /* position horizontale */
        top: 80%;
        /* position verticale */
        height: 80px;
        /* hauteur */
        width: 200px;
        /* largeur */
        border: 2px solid #fd5d38;
        /* bordure avec couleur */
        font-size: 18px;
        /* taille texte */
        background: #036d68;
        /* couleur de fond */
        text-align: center;
        /* alignement du texte centré */
        border-radius: 15px;
    }

    #menuToggle {
        position: relative;
        /*type de positionnement du menu*/
        top: 4px;
        /*position*/
        left: 42px;
        /*position*/
        z-index: 1;
        /*Definie sur quel couche on place le meunu*/

        -webkit-user-select: none;
        user-select: none;
    }

    #menuToggle a {
        text-decoration: none;
        color: #ffffff;
        /*changement de couleur lorsqu'on le menu s'ouvre*/

        transition: color 0.3s ease;
        /*fade*/
    }

    #menuToggle a:hover {
        color: #fd5d38;
        /*couleur des sous menu*/
    }

    #menuToggle input {
        /*crée la case clicable*/
        width: 40px;
        height: 32px;
        position: absolute;
        top: -7px;
        left: -5px;

        cursor: pointer;

        opacity: 0;
        /*cache la checkbox*/
        z-index: 2;
        /*et on place le "menu burger par dessus"*/

        -webkit-touch-callout: none;
    }

    /*Création du Burger*/

    #menuToggle span {
        display: block;
        width: 33px;
        height: 4px;
        margin-bottom: 5px;
        position: relative;

        background: #fd5d38;
        border-radius: 3px;

        z-index: 1;

        transform-origin: 4px 0px;

        transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1), background 0.5s cubic-bezier(0.77, 0.2, 0.05, 1),
            opacity 0.55s ease;
    }

    #menuToggle span:first-child {
        transform-origin: 0% 0%;
    }

    #menuToggle span:nth-last-child(2) {
        transform-origin: 0% 100%;
    }

    /*Transformation du burger en croix*/

    /*Rotation de la première barre*/

    #menuToggle input:checked~span {
        opacity: 1;
        transform: rotate(45deg) translate(-2px, -1px);
        background: #ffffff;
    }

    /*On fait disparaitre la barre du milieu*/

    #menuToggle input:checked~span:nth-last-child(3) {
        opacity: 0;
        transform: rotate(0deg) scale(0.2, 0.2);
    }

    /*Rotation de la dernière barre dans l'autre sens*/

    #menuToggle input:checked~span:nth-last-child(2) {
        transform: rotate(-45deg) translate(0, -1px);
    }

    /*Fixation du menu: taille, couleur, etc...*/

    #menu {
        position: absolute;
        width: 150px;
        /*Largeur*/
        height: 100vh;
        /*Hauteur*/
        margin: -100px 0 0 -50px;
        /*espace du menu et de la marge de la fenêtre */
        padding: 50px;
        /*Centrage horizontale*/
        padding-top: 300px;
        /*Centrage verticale*/

        background: #036d68;
        /*couleur du menu*/

        list-style-type: none;
        /*Def du style*/
        -webkit-font-smoothing: antialiased;
        /* to stop flickering of text in safari */

        transform-origin: 0% 0%;
        transform: translate(-100%, 0);
        /*Translation*/

        transition: transform 0.5s cubic-bezier(0.77, 0.2, 0.05, 1);
        /*Permet de rendre l'effet de translation plus fluide*/
    }

    #menu li {
        padding: 10px 0;
        font-size: 22px;
    }

    #menuToggle input:checked~ul {
        transform: none;
    }

    img {
        position: relative;
        bottom: -320px;
        left: -50px;
        width: 250px;
        height: 100px;
    }

    .arbo {
        position: relative;
        top: 40px;
        left: 250px;
    }
</style>