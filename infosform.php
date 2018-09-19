<?php

if (isset($_POST['prenom']) AND !empty($_POST['prenom'])){
  echo 'Prénom: ' . $_POST['prenom'] . "</br>";
}

if (isset($_POST['nom']) AND !empty($_POST['nom'])){
  echo 'Nom: ' . $_POST['nom'] . "</br>";
}

if (isset($_POST['mail']) AND !empty($_POST['mail'])){
  echo 'Adresse mail: ' . $_POST['mail'] . "</br>";
}

if (isset($_POST['message']) AND !empty($_POST['message'])){
  echo 'Message: ' . $_POST['message'] . "</br>";
}



 ?>
