<title>Nos Prestations - Garage Chronomeca</title>
<div class="tarif-horraires">

    <img src="../include/main_oeuvre_garagiste.png" alt="" width="14%">

    <?php

    $contenuPage = $db->query("SELECT * FROM page WHERE id = 2");

    while ($donnees = $contenuPage->fetch()) {
        echo $donnees['contenu'];
    }

    ?>

</div>