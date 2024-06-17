<?php
include '../back/connexion_bdd.php';

try {
    $stmt = $db->query("SELECT * FROM produit");
    $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $exception) {
    echo 'Erreur : ' . $exception->getMessage();
}
?>

<title>Voitures - Garage Chronomeca</title>
<h2>Liste des Voitures</h2>

<?php if (!empty($produits)) : ?>

    <div class="row">


        <?php foreach ($produits as $produit) : ?>


            <div class="col-md-6 col-lg-4">

                <div class="card mb-4 border border-danger">

                    <?php
                    $stmt = $db->prepare("SELECT chemin FROM image WHERE produit_id = ?");
                    $stmt->execute([$produit['id']]);
                    $image = $stmt->fetch(PDO::FETCH_ASSOC);
                    if ($image) {
                        echo '<img src="' . $image['chemin'] . '" alt="Image du produit" width="250";  class="img-fluid">';
                    } else {
                        echo 'Image non disponible';
                    }
                    ?>


                    <div class="h5"> Modéle :</div><?php echo $produit['nom']; ?>
                    <br>
                    <div class="h5">Kilomètrage :</div><?php echo $produit['km'] ?> Km
                    <br>
                    <div class="h5">Description:</div><?php echo $produit['description']; ?>
                    <br>
                    <div class="h5">Prix :</div><?php echo $produit['prix']; ?> €


                </div>
            </div>
        <?php endforeach; ?>

    <?php else : ?>
    </div>

    <p>Aucun produit publié pour le moment.</p>
    <div id="loader-wrapper">
        <svg id="voiture" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 187.87 88.12">
            <defs>
                <style>
                    .cls-1 {
                        fill: #f50000;
                    }

                    .cls-1,
                    .cls-2,
                    .cls-3,
                    .cls-4,
                    .cls-5 {
                        stroke: #1b1464;
                        stroke-width: 5px;
                    }

                    .cls-1,
                    .cls-2,
                    .cls-3 {
                        stroke-miterlimit: 10;
                    }

                    .cls-2,
                    .cls-4 {
                        fill: #fff;
                    }

                    .cls-3,
                    .cls-5 {
                        fill: none;
                    }

                    .cls-4,
                    .cls-5 {
                        stroke-linecap: round;
                        stroke-linejoin: round;
                    }
                </style>
            </defs>
            <title>voiture</title>
            <path class="cls-1" d="M31.82,71s-49,6-17-34,78-39,100-22c25.92,20,21.49,13.56,57,24,17,5,28,38-15,32" transform="translate(-1.47 -1.35)" />
            <circle class="cls-2" cx="140.1" cy="69.87" r="15.75" />
            <circle class="cls-2" cx="46.1" cy="69.87" r="15.75" />
            <line class="cls-3" x1="124.35" y1="69.62" x2="62.35" y2="69.62" />
            <path class="cls-4" d="M121.82,36h-91s19-23,48-23C108,13,121.82,36,121.82,36Z" transform="translate(-1.47 -1.35)" />
            <line class="cls-5" x1="75.35" y1="34.62" x2="75.53" y2="12.62" />
        </svg>
        <hr />
    </div>
    </div>
<?php endif; ?>