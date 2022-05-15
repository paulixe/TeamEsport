<?php
require_once('../connect.php')
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../css/style.css" rel="stylesheet">
    <title> Team E-Sport</title>
</head>

<body>
    <a id="direcindex" href="../../index.php">
        <?php
        include('../Header.php');
        ?>
    </a>

    <main>
        <div class="gauchevsdroite petitfond">
            <div class="highflexgrow">
                <h2>Regarder l'état de la salle</h2>
                <img id="image_page_jalon" src="../../images/ordinateur.jpg" alt="image d'ordinateur">
            </div>
            <div class="temps">
                <h2>Temps pris:</h2>
                </br></br></br></br>
                <h3 id="debutjalon">
                    12 novembre
                </h3></br>

                <img class="fleche" src="../../images/fleche descendante.jpg" alt="image flèche">
                </br>
                <h3 id="finjalon">
                    17 décembre
                </h3>
            </div>
        </div>
        <h2>Description:</h2>
    </main>
</body>

</html>