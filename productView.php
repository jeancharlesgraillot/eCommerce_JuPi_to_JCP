<div class="container">
    <div class="product">
        <h1><?= $product['name'] ?></h1>
        <img class="img" src="img/<?= $product['img'] ?>" />
        <p>Prix: <?= $product['price'] ?> €</p>
        <p>Info: <?= $product['descr'] ?> </p>
        <p>Tailles: <?= $product['size'] ?></p>
        <p>Couleurs: <?= $product['color'] ?></p>
        <a href="?&id=<?= $_GET['id'] ?>&add=true&action=descriptionProduct">Ajouter au panier</a>
    </div>
    <p><a href="index.php">Retour</a></p>
</div>
