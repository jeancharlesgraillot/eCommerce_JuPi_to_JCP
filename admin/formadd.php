<?php
session_start();

require '../db.php';

if (isset($_POST['mdp']) AND !empty($_POST['mdp']) AND isset($_POST['admin_name']) AND !empty($_POST['admin_name'])) {

  $req = $pdo->query('SELECT * FROM users WHERE pseudo = "'. htmlspecialchars($_POST['admin_name']).'"');

  $mdp = $req->fetch();

  if($mdp['password'] == $_POST['mdp']){
    $_SESSION['connect'] = true;
    header('Location:new_product.php');
  }
}


include '../include/header.php';
include '../include/footer.html';
 ?>
