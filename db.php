<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=e_commerce', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
    die('Erreur mysql: '. $err->getMessage());
}

