<?php
session_start();
require 'model/model.php';

if (!isset($_GET['id']) || !filter_var($_GET['id'], FILTER_VALIDATE_INT))
  header("Location: ./");

if(isset($_GET['add'])) {
    if(!isset($_SESSION['panier']))
        $_SESSION['panier'] = 1;
    else
        $_SESSION['panier'] += 1;
    header('Location: ?&id='.$_GET['id']);
}

if (isset($_GET['id']) && $_GET['id'] > 0){

  $product = getProduct($_GET['id']);

  if(!$product){

    header('Location: ./');
  }

  else{

    $title = $product['name'];

    include 'include/header.php';

    require 'productView.php';

    include 'include/footer.html';
  }
}
