<br >
- Liste des produits

<?php
foreach ($produits as $unProduit){ ?>
        <?= "<hr>"; ?>
        <?=$unProduit['nom']; ?>
        <?=$unProduit['prix']; ?> €
        <a href="index.php?uc=produit&action=supprimer&id=<?=$unProduit['id']?>">SUPPRIMER</a>
        <?php 
 
        ?>

<?php 
}
 ?>
 <a href="index.php?uc=produit&action=ajouter">
Ajouter un produit
</a>
