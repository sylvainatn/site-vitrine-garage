<title>Contact - Garage Chronomeca</title>
<div style="text-align: center;">

    <?php

    $contenuPage = $db->query("SELECT * FROM page WHERE id = 5");

    while ($donnees = $contenuPage->fetch()) {
        echo $donnees['contenu'];
    }

    ?>

</div>