<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=bdd_pierre_julie', 'root', 'Strawberry591peaches');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
    die('Erreur mysql: '. $err->getMessage());
}
