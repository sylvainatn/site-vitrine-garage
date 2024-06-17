<!-- On inclut la BDD -->
<?php include_once 'connexion_bdd.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <!-- TinyMCE -->
    <script src="tinymce/js/tinymce/tinymce.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../view/css/style.css">
    <link rel="stylesheet" href="../view/bootstrapCss/bootstrap.min.css">
    <title>Administration - Garage Chronomeca</title>
</head>

<body style="margin: 0% 6%;">
    
    <!-- On inclut le header -->
    <?php include '../view/header.html'; ?>

    <?php

    echo '<h2>Administration</h2><br>';

    if (isset($_GET['p']) && $_GET['p'] == 'index' || !isset($_GET['p'])) {
        include "pageaccueil.php";
    }

    if (isset($_GET['p']) && $_GET['p'] == 'prestation') {
        include 'pageprestation.php';
    }

    if (isset($_GET['p']) && $_GET['p'] == 'plan') {
        include 'pageplan.php';
    }

    if (isset($_GET['p']) && $_GET['p'] == 'contact') {
        include 'pagecontact.php';
    }

    if (isset($_GET['p']) && $_GET['p'] == 'voiture') {
        echo '<style>body {text-align:center;}</style>';
        include 'voitureBack.php';
    }

    ?>
    
    <!-- Script JS -->
    <script src="../view/js/main.js"></script>
    <script src="../view/js/script.js"></script>
    <script src="../view/bootstrapJs/bootstrap.bundle.min.js"></script>
    <script src="../view/bootstrapJs/color-modes.js"></script>
</body>

</html>