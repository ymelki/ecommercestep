<?php

/*
Un autre parametre qui va gérer les 
différents cas du CRUD
 - Liste des produits
 - Ajouter un produit 
 - Supprimer un produit 
*/
$action = $_GET['action'];
if ($action == "read_all" ) {
    // recuperation des données
    include __DIR__.'/../modele/ModeleProduit.php';
    $produits=getAllProduits();
    
    // afficher la vue dans laquelle on affichera les données
    include __DIR__.'/../Vue/ProduitVue.php';
}

if ($action == "read_one" ) {
    // recupérer l'ID qui est dans l'URL
    $id=$_GET['id'];
    // Grace au modele je veux recuperer le produit correspondant
    // a l'ID
    include __DIR__.'/../modele/ModeleProduit.php';
    $produit=getOneProduit($id);


    include __DIR__.'/../Vue/ProduitdetailVue.php';
}