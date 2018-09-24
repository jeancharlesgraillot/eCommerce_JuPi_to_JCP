<?php
session_start();

$title = "Flickt - Admin page";

require 'model/model.php';

if (isset($_POST['mdp']) AND !empty($_POST['mdp']) AND isset($_POST['admin_name']) AND !empty($_POST['admin_name'])) {


  $mdp = checkPassword(htmlspecialchars($_POST['admin_name']));


  if($mdp['password'] == $_POST['mdp']){
    $_SESSION['connect'] = true;
  }
}

include 'include/header.php';

if(isset($_SESSION['connect']) && $_SESSION['connect'] === true){

  require 'add_products.php';

}else{

  require 'connectionView.php';

}

include 'include/footer.html';
