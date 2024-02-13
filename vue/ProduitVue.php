<br >
- Liste des produits

<?php
foreach ($produits as $unProduit){ ?>
        <?= "<hr>"; ?>
        <?=$unProduit['nom']; ?>
        <?=$unProduit['prix']; ?> €

<?php 
}
 
