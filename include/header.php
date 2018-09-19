<?php
if(isset($_POST['hidden']))
    unset($_SESSION['panier']);
?>
<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $title ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="icon" href="icon.ico" />
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="/eCommerce/css/main.css">
  <link rel="stylesheet" href="/eCommerce/css/main.css">
  
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
  <header>
      <a href="index.php">FLICKT</a>
      <nav>
          <ul>
              <li><a href="/eCommerce/">Accueil</a></li>
              <li><a href="/eCommerce/form.php">Contact</a></li>
              <li>Panier<?php if(isset($_SESSION['panier'])) echo $_SESSION['panier'] ?></li>
              <li><a href="/eCommerce/admin/adminaccess.php">Connexion</a></li>
          </ul>
      </nav>
  </header>