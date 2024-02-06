<?php
// session_start();
// routeur
include __DIR__."/vue/header.php";
// var_dump($_SERVER);
$page=$_GET['uc'];

// afficher le header
// include __DIR__.'/Vue/header.php';
if ($page==="accueil"){
    include __DIR__.'/Controller/AccueilController.php';
} 

elseif ($page==="produit"){
    include __DIR__.'/Controller/ProduitController.php';
} 
elseif ($page==="categorie"){
    include __DIR__.'/Controller/CategorieController.php';
} 
elseif ($page==="contact"){
    include __DIR__.'/Controller/ContactController.php';
} 

?>
</body>
</html>

 