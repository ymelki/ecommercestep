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
    $produits=getAllProduit();
    
    // afficher la vue dans laquelle on affichera les données
    include __DIR__.'/../Vue/ProduitVue.php';
}

if ($action == "readone" ) {
    include __DIR__.'/../Vue/ProduitdetailVue.php';
}

if ($action == "ajouter" ) {
    include __DIR__.'/../Vue/ajouterproduit.php';
}

 
if ($action == "enregistrerproduit" ) {
    // 1 recuperer le champ nom saisie par l'utilisateur
    $nom=$_POST['nom'];
    echo $nom;
    // 2 on va dans la B.D. et on enregistre les données
    include __DIR__.'/../modele/ModeleProduit.php';
    saveProduit($nom);

    // on peut redirige vers la page produits
    header("location:index.php?uc=produit&action=read_all");
 
}
if ($action=="supprimer") {
    $id=$_GET['id'];
    include __DIR__.'/../modele/ModeleProduit.php';
    supprimerProduit($id);
    header("location:index.php?uc=produit&action=read_all");





}