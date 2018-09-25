<?php

require 'model/model.php';

function listProducts(){

  $title = "FLickt - Accueil";
  include 'include/header.php';
  $products = getProducts();
  require('view/indexView.php');
  include 'include/footer.html';

}

function descriptionProduct($getid){

  if (!isset($getid) || !filter_var($getid, FILTER_VALIDATE_INT))
    header("Location: ./");

  if(isset($_GET['add'])) {
      if(!isset($_SESSION['panier']))
          $_SESSION['panier'] = 1;
      else
          $_SESSION['panier'] += 1;
      header('Location: index.php?action=descriptionProduct&id='.$getid);
  }

  if (isset($getid) && $getid > 0){

    $product = getProduct($getid);

    if(!$product){
      header('Location: ./');
    }

    else{

      $title = $product['name'];
      include 'include/header.php';
      require 'view/productView.php';
      include 'include/footer.html';
    }
  }
}

function contact(){

  $title = "Flickt - Contact";
  include 'include/header.php';
  require ('view/contactView.php');
  include 'include/footer.html';
}

function adminPage(){

  $title = "Flickt - Admin page";

  if (isset($_POST['mdp']) AND !empty($_POST['mdp']) AND isset($_POST['admin_name']) AND !empty($_POST['admin_name'])) {

    $mdp = checkPassword(htmlspecialchars($_POST['admin_name']));
    if($mdp['password'] == $_POST['mdp']){
      $_SESSION['connect'] = true;
    }
  }

  include 'include/header.php';

  if(isset($_SESSION['connect']) && $_SESSION['connect'] === true){
    require 'view/add_products.php';
  }
  else{
    require 'view/connectionView.php';
  }

  include 'include/footer.html';

}
