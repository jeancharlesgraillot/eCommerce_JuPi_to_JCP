<?php

function pdoConnect() {

  try {
      $pdo = new PDO('mysql:host=localhost;dbname=bdd_pierre_julie', 'root', 'Strawberry591peaches');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  catch (PDOException $err) {
      die('Erreur mysql: '. $err->getMessage());
  }
  return $pdo;
}

function getProducts(){

  $pdo = pdoConnect();
  $req = $pdo->query('SELECT * FROM products');
  $products = $req->fetchAll();

  return $products;
}

function getProduct($productId){

  $pdo = pdoConnect();
  $req = $pdo->prepare('SELECT * FROM products WHERE id = :productId');
  $req->execute(array(
    'productId' => $productId
  ));
  $product = $req->fetch();

  return $product;
}

function addProduct($name, $descr, $price, $size, $color, $img){

  $pdo = pdoConnect();
  $req = $pdo->prepare('INSERT INTO products(name, descr, price, size, color, img) VALUES( :name, :descr, :price, :size, :color, :img)');
  $req->execute(array(
  'name' => $name,
  'descr' => $descr,
  'price' => $price,
  'size' => $size,
  'color' => $color,
  'img' => $img
  ));

}

function checkPassword($adminName){

  $pdo = pdoConnect();
  $req = $pdo->prepare('SELECT * FROM users WHERE pseudo = :pseudo');
  $req->execute(array(
    'pseudo' => $adminName
  ));

  $mdp = $req->fetch();

  return $mdp;
}
