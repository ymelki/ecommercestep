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
    
    // afficher la vue dans laquelle on affichera les données
    include __DIR__.'/../Vue/ProduitVue.php';
}

if ($action == "readone" ) {
    include __DIR__.'/../Vue/ProduitdetailVue.php';
}