<title>Plan - Garage Chronomeca</title>
<div style="text-align: center;">

    <?php

    $contenuPage = $db->query("SELECT * FROM page WHERE id = 4");

    while ($donnees = $contenuPage->fetch()) {
        echo $donnees['contenu'];
    }

    ?>

</div>
<div class="plan-maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2620.1054214418673!2d2.891413576380158!3d48.95147847134484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e8a113a67fa4e1%3A0xf030228086b2c4b3!2sGarage%20Chronomeca!5e0!3m2!1sfr!2sfr!4v1686123519393!5m2!1sfr!2sfr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>