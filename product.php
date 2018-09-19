<?php
session_start();
require 'db.php';

if (!isset($_GET['id']) || !filter_var($_GET['id'], FILTER_VALIDATE_INT))
  header("Location: ./");

if(isset($_GET['add'])) {
    if(!isset($_SESSION['panier']))
        $_SESSION['panier'] = 1;
    else
        $_SESSION['panier'] += 1;
    header('Location: ?&id='.$_GET['id']);
}

$req = $pdo->query('SELECT * FROM products WHERE id = "'.$_GET['id'].'"');
$product = $req->fetch();

if(count($product) < 1)
    header('Location: ./');

$title = $product['name'];

include 'include/header.php';
?>
<div class="container">
    <div class="product">
        <h1><?= $product['name'] ?></h1>
        <img class="img" src="img/<?= $product['img'] ?>" />
        <p>Prix: <?= $product['price'] ?> €</p>
        <p>Info: <?= $product['descr'] ?> </p>
        <p>Tailles: <?= $product['size'] ?></p>
        <p>Couleurs: <?= $product['color'] ?></p>
        <a href="?&id=<?= $_GET['id'] ?>&add=true">Ajouter au panier</a>
    </div>
    <p><a href="index.php">Retour</a></p>
</div>

<?php
include 'include/footer.html';