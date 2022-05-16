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
    include('fichiersPHP/Header.php');
    ?>

    <main>
        <div id="jalonContainer">
            <?php
            $sql = "SELECT * FROM jalon";
            $res = $bdd->query($sql);
            while ($ligne = $res->fetch()) {
                $id = $ligne['jalon_id'];
                $titre = $ligne['jalon_titre'];
                $image = $ligne['jalon_image'];
            ?>

                <a class="jalon" href="fichiersPHP/PageJalon.php?id=<?= $id ?>">
                    <img src="images/<?= $image ?>" alt="image de cahier des charges">
                    <h3><?= $titre ?></h3>
                </a>
            <?php
            }
            ?>

            

        </div>
    </main>

</body>

</html>