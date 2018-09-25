<form method="post" action="view/new_product.php" enctype="multipart/form-data">
    <label>Nom du produit </label> : <input type="text" name="name" required/></br>
    <textarea name="desc" placeholder="description" rows="8" cols="45" required>
    </textarea></br>
    <label>Prix </label> : <input type="text" name="price" required/></br>
    <label>Taille </label> : <input type="text" name="size" required/></br>
    <label>Couleur </label> : <input type="text" name="color" required/></br>
    <label>Image (1 MO max.)</label> : <input type="file" name="img" required></br>
    <input type="submit" value="Valider" /></br>
</form>
