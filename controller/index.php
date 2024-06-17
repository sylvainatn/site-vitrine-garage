<!-- On inclut la BDD -->
<?php include_once '../back/connexion_bdd.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <link rel="icon" type="image/x-icon" href="../include/S.webp">
    <!-- CSS -->
    <link rel="stylesheet" href="../view/css/style.css">
    <link rel="stylesheet" href="../view/bootstrapCss/bootstrap.min.css">
</head>

<body style="margin: 0% 6%;">

    <!-- On inclut le header -->
    <?php include '../view/header.html'; ?>

    <div style="text-align: center;">

        <span class="coucou" style="color:darkgreen; font-weight:bold;">
            <style>
                @media (max-width: 416px) {
                    .coucou {
                        font-size: 12px;
                    }
                }
            </style>
            <script type="text/javascript">
                var ladate = new Date()
                var tab_jour = new Array("Dimanche Fermé", "Lundi Ouvert de 8h30 à 12h30 et de 14h à 18h30 ", "Mardi Ouvert de 8h30 à 12h30 et de 14h à 18h30", "Mercredi Ouvert de 8h30 à 12h30 et de 14h à 18h30", "Jeudi Ouvert de 8h30 à 12h30 et de 14h à 18h30", "Vendredi Ouvert de 8h30 à 12h30 et de 14h à 18h30", "Samedi Fermé");
                document.write(tab_jour[ladate.getDay()])
            </script>
        </span>
        <br><br>

        <?php

        if (isset($_GET['p']) && $_GET['p'] == 'index' || !isset($_GET['p'])) {

            echo '<title>Accueil - Garage Chronomeca</title>';

            // On inclut l'horloge
            include "../view/horloge.html";

            $contenuPage = $db->query("SELECT * FROM page WHERE id = 1");

            while ($donnees = $contenuPage->fetch()) {
                echo $donnees['contenu'];
            }
        }

        ?>
    </div>
    <?php

    if (isset($_GET['p']) && $_GET['p'] == 'prestation') {
        // On inclut l'horloge
        include "../view/horloge.html";
        include 'prestation.php';
    }


    if (isset($_GET['p']) && $_GET['p'] == 'voiture') {
        include 'voiture.php';
    }

    if (isset($_GET['p']) && $_GET['p'] == 'plan') {
        include "../view/horloge.html";
        include 'plan.php';
    }

    if (isset($_GET['p']) && $_GET['p'] == 'contact') {
        include 'contact.php';
    }

    if (isset($_GET['p']) && $_GET['p'] == 'legal') {
        include 'legal.php';
    }

    ?>

    <!-- On inclut le footer -->
    <?php include "../view/footer.html"; ?>

    <!-- Script JS -->
    <script src="../view/js/main.js"></script>
    <script src="../view/js/script.js"></script>
    <script src="../view/bootstrapJs/bootstrap.bundle.min.js"></script>
    <script src="../view/bootstrapJs/color-modes.js"></script>
</body>

</html>