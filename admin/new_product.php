<?php
session_start();
require '../db.php';

if(!isset($_SESSION['connect']) || $_SESSION['connect'] != true)
    header('Location: adminaccess.php');

$title = 'ajouter un produit';

if (isset($_POST['name']) AND !empty($_POST['name'])
  AND isset($_POST['desc']) AND !empty($_POST['desc'])
  AND isset($_POST['price']) AND !empty($_POST['price'])
  AND isset($_POST['size']) AND !empty($_POST['size'])
  AND isset($_POST['color']) AND !empty($_POST['color'])
  AND isset($_FILES['img']) AND ($_FILES['img']['error'] == 0) 
  AND ($_FILES['img']['size'] < 1000000)) {
    $name = htmlspecialchars($_POST['name']);
    $descr = htmlspecialchars($_POST['desc']);
    $price = htmlspecialchars($_POST['price']);
    $size = htmlspecialchars($_POST['size']);
    $color = htmlspecialchars($_POST['color']);
    $img = htmlspecialchars($_FILES['img']['name']);
    $infoimg = pathinfo($_FILES['img']['name']);
    $extension = $infoimg['extension'];
    
    if($extension == "png" OR $extension == "jpg") {
        if (is_numeric($price) AND is_numeric($size)) {
            $req = $pdo->prepare('INSERT INTO products(name, descr, price, size, color, img) VALUES( :name, :descr, :price, :size, :color, :img)');
            $req->execute(array(
          	'name' => $name,
          	'descr' => $descr,
          	'price' => $price,
          	'size' => $size,
          	'color' => $color,
                'img' => $img
                ));
                move_uploaded_file($_FILES['img']['tmp_name'], '../img/'.$img);
        }   else {
            $err = 'veuillez entrer des chiffres dans les champs "prix" et "taille" ';
        }
    }   else {
        $err = 'le fichier doit être au format jpg ou png';
    }
}

include '../include/header.php';

if(!isset($err)): ?>
    <p>Votre produit a été enregistré.</p>
<?php else: ?>
    <a href="add_products.php"> Retour à la page précédente</a>
<?php endif;

include '../include/footer.html';
