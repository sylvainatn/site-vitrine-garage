<?php
include 'connexion_bdd.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produitId = $_POST['produit_id'];

    $stmt = $db->prepare("SELECT * FROM produit WHERE id = ?");
    $stmt->execute([$produitId]);
    $produit = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    @$nomProduit = $_POST["nomProduit"];
    @$prixProduit = $_POST['prixProduit'];
    @$descriptionProduit = $_POST['descriptionProduit'];
    @$imageBin = $_POST['imageProduit'];

    if (isset($nomProduit) || isset($prixProduit) || isset($descriptionProduit) || isset($imageBin)) {
        $stmt = $db->prepare("UPDATE produit SET nom = ?, prix = ?, description = ? WHERE id = ?");
        $stmt->execute([$nomProduit, $prixProduit, $descriptionProduit, $produitId]);

        $cheminImage = $_FILES['imageProduit']['tmp_name'];
        $path = "../exclude/image/" . $produitId . ".jpg";
        move_uploaded_file($cheminImage, $path);

        $stmt = $db->prepare("UPDATE image SET chemin = ? WHERE produit_id = ?");
        $stmt->execute([$path, $produitId]);

        header("Location: voitureBack.php");
    }
}
?>


<!DOCTYPE html>
<html style="margin:10%; text-align: center">

<head>
    <title>Modification du produit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../view/bootstrapCss/bootstrap.min.css" rel="stylesheet">
    <script src="../view/bootstrapJs/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h2>Modification du produit</h2>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="produit_id" value="<?php echo $produit['id']; ?>">

        <label for="nomProduit">Nom du produit:</label><br>
        <input type="text" id="nomProduit" name="nomProduit" value="<?php echo $produit['nom']; ?>" class="btn btn-outline-success me-2" required><br><br>

        <label for="prixProduit">Prix du produit:</label><br>
        <input type="number" step="0.01" id="prixProduit" name="prixProduit" value="<?php echo $produit['prix']; ?>" class="btn btn-outline-success me-2" required><br><br>

        <label for="descriptionProduit">Description du produit:</label><br>
        <textarea id="descriptionProduit" name="descriptionProduit" class="btn btn-outline-success me-2" style="width: 40%;" required><?php echo $produit['description']; ?></textarea><br><br>

        <label for="imageProduit">Image du produit:</label><br>
        <input type="file" id="imageProduit" name="imageProduit"><br><br>

        <input type="submit" value="Modifier" class="btn btn-sm btn-outline-secondary">
    </form>
</body>

</html>