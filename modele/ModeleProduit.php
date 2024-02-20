<?php
function getAllProduit(){
    // recuperer l'ensemble des produits 
    // de ma table 
    // 1 . Connecte à la B.D.
    $pdo = new \PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');

    // 2 . Requete 
    $statement=$pdo->query("select * from produit");


    // 3 . Recupere
    $produits=$statement->fetchAll(PDO::FETCH_ASSOC);

    var_dump($produits);     
    return $produits;                                               
}

function saveProduit($nom){
    $pdo = new \PDO('mysql:host=localhost;dbname=ecommerce', 'root', '');

    $prix=100;
    
    $statement=$pdo->prepare("INSERT INTO produit (nom, prix) 
    VALUES (:nom_protege, :prix_protege)");
    $statement->bindParam(':nom_protege', $nom, PDO::PARAM_STR);
    $statement->bindParam(':prix_protege', $prix, PDO::PARAM_INT);
    $statement->execute();

}