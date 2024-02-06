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
?>
</body>
</html>

 