<br >
- Liste des produits

<?php
foreach ($produits as $unProduit){ ?>
        <?= "<hr>"; ?>
        <a href="index.php?uc=produit&action=read_one&id=<?=$unProduit['id'];?>">
        <?=$unProduit['nom']; ?>
        </a>
        <?=$unProduit['prix']; ?> €

<?php 
}
 
