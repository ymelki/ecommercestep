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
    include __DIR__.'/../Vue/ProduitVue.php';
}

if ($action == "readone" ) {
    include __DIR__.'/../Vue/ProduitdetailVue.php';
}