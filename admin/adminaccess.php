<?php
session_start();
if(isset($_SESSION['connect']) && $_SESSION['connect'] === true)
    header('Location:add_products.php');
include '../include/header.php';
?>
<form method="post" action="formadd.php">
  <label>Administrateur </label> : <input type="text" name="admin_name"/>
  <label>Mot de passe </label> : <input type="text" name="mdp"/>
  <input type="submit" value="Se connecter" />
</form>

<?php
include '../include/footer.html';

