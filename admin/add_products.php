<?php 
session_start();

include '../include/header.php';
?>

<form method="post" action="new_product.php" enctype="multipart/form-data">
    <label>Nom du produit </label> : <input type="text" name="name"/></br>
    <textarea name="desc" placeholder="description" rows="8" cols="45">
    </textarea></br>
    <label>Prix </label> : <input type="text" name="price"/></br>
    <label>Taille </label> : <input type="text" name="size"/></br>
    <label>Couleur </label> : <input type="text" name="color"/></br>
    <label>Image (1 MO max.)</label> : <input type="file" name="img"></br>
    <input type="submit" value="Valider" /></br>
</form>

<?php 
include '../include/footer.html';