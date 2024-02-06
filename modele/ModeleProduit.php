<?php

// recuperer l'ensemble des produits 
// de ma table 
// 1 . Connecte à la B.D.
$pdo = new \PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');

// 2 . Requete 
$statement=$pdo->query("select * from produit");


// 3 . Recupere
$produits=$statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($produits);
