<br >
- Liste des produits

<?php
foreach ($produits as $unProduit){ ?>
        <?= "<hr>"; ?>
        <?=$unProduit['nom']; ?>
        <?=$unProduit['prix']; ?> €

<?php 
}
 ?>
 <a href="index.php?uc=produit&action=ajouter">
Ajouter un produit
</a>
