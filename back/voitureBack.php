<?php
include 'connexion_bdd.php';

try {
    @$nomProduit = $_POST["nomProduit"];
    @$prixProduit = $_POST['prixProduit'];
    @$descriptionProduit = $_POST['descriptionProduit'];
    @$image = $_POST['imageProduit'];
    @$km = $_POST['km'];

    if (!empty($nomProduit) && !empty($prixProduit) && !empty($descriptionProduit) && !empty($km)) {


        $stmt = $db->prepare("INSERT INTO produit(nom, prix, description, km) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nomProduit, $prixProduit, $descriptionProduit, $km]);

        $produitId = $db->lastInsertId();
        $cheminImage = $_FILES['imageProduit']['tmp_name'];
        $path = "../exclude/image/" . $produitId . ".jpg";
        move_uploaded_file($cheminImage, $path);

        $stmt = $db->prepare("INSERT INTO image(produit_id, chemin) VALUES (?, ?)");
        $stmt->execute([$produitId, $path]);

        echo "Le produit a été publié avec succès !";
    }
} catch (PDOException $exception) {
    echo 'Erreur : ' . $exception->getMessage();
}

//Supprimer une annonce une annonce
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    @$produitId = $_POST['produit_id'];

    $stmt = $db->prepare("DELETE FROM image WHERE produit_id = ?");
    $stmt->execute([$produitId]);

    $stmt = $db->prepare("DELETE FROM produit WHERE id = ?");
    $stmt->execute([$produitId]);
}
?>

<h2>Vente de Produit</h2>

<form action="" method="POST" enctype="multipart/form-data">
    <label for="nomProduit">Nom du produit:</label><br>
    <input type="text" id="nomProduit" name="nomProduit" class="btn btn-outline-success me-2"><br><br>

    <label for="prixProduit">Prix du produit:</label><br>
    <input type="number" step="0.01" id="prixProduit" name="prixProduit" class="btn btn-outline-success me-2"><br><br>

    <label for="km">Kilometrage :</label><br>
    <input type="number" step="0.01" id="km" name="km" class="btn btn-outline-success me-2"><br><br>

    <label for="descriptionProduit">Description du produit:</label><br>
    <textarea id="descriptionProduit" name="descriptionProduit" class="btn btn-outline-success me-2" style="width: 40%;"></textarea><br><br>

    <label for="imageProduit">Image du produit:</label><br>
    <input type="file" id="imageProduit" name="imageProduit" class="btn btn-sm btn-outline-secondary"><br><br>

    <input type="submit" value="Publier" class="btn btn-outline-success me-2">
</form>

<main>
    <?php
    include '../back/connexion_bdd.php';

    try {
        $stmt = $db->query("SELECT * FROM produit");
        $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $exception) {
        echo 'Erreur : ' . $exception->getMessage();
    }
    ?>

    <h2>Liste des produits</h2>

    <?php if (!empty($produits)) : ?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <?php foreach ($produits as $produit) : ?>
                <tr>
                    <td><?php echo $produit['nom']; ?></td>
                    <td><?php echo $produit['prix']; ?></td>
                    <td><?php echo $produit['description']; ?></td>
                    <td>
                        <?php
                        $stmt = $db->prepare("SELECT chemin FROM image WHERE produit_id = ?");
                        $stmt->execute([$produit['id']]);
                        $image = $stmt->fetch(PDO::FETCH_ASSOC);
                        if ($image) {
                            echo '<img src="' . $image['chemin'] . '" alt="Image du produit" width="100">';
                        } else {
                            echo 'Image non disponible';
                        }
                        ?>
                    </td>
                    <td>
                        <form action="modifVente.php" method="POST">
                            <input type="hidden" name="produit_id" value="<?php echo $produit['id']; ?>">
                            <input type="submit" value="Modifier" class="btn btn-sm btn-outline-secondary">
                        </form>
                    </td>
                    <td>
                        <form action="" method="POST">
                            <input type="hidden" name="produit_id" value="<?php echo $produit['id']; ?>">
                            <input type="submit" value="Supprimer" class="btn btn-sm btn-outline-secondary">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else : ?>
        <p>Aucun produit publié pour le moment.</p>
    <?php endif; ?>
</main>