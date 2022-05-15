<?php
require_once('fichiersPHP/connect.php')
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title> Team E-Sport</title>
</head>

<body>
    <?php
    include ('fichiersPHP/Header.php');
    ?>

    <main>
        <div id="jalonContainer">

            
            <a class="jalon" href="#">
            <img src="images/cahier_des_charges.jpg" alt="image de cahier des charges">
            <h3>Faire le cahier des charges</h3>
</a>
<a class="jalon" href="fichiersPHP/pag  eJalon.php">
                <img src="images/ordinateur.jpg" alt="image d'ordinateur">
                <h3>Regarder l'état de la salle</h3>
            </a>
            <a class="jalon" href="#">
            <img src="images/formulaire.jpg" alt="image de cahier des charges">
            <h3> Envoyer un formulaire aux joueurs intéressés</h3>
</a>
            <a class="jalon" href="#">
            <img src="images/Dell.jpg" alt="image de cahier des charges">
            <h3>Faire la commande Dell</h3>
</a>
            <a class="jalon" href="#">
            <img src="images/travail_équipe.jpg" alt="image de cahier des charges">
            <h3> Reunir les joueurs</h3>
</a>
            <a class="jalon" href="#">
            <img src="images/livrables.jpg" alt="image de cahier des charges">
            <h3> Faire des livrables pour mieux organiser les équipes</h3>
</a>
            <a class="jalon" href="#">
            <img src="images/validification.jpg" alt="image de cahier des charges">
            <h3> Verifier nos hypothèses</h3>
</a>

        </div>
    </main>

</body>

</html>