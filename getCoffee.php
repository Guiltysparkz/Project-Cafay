<?php 

require_once('connect.php');

for ($ids = 0; $ids != NULL; $ids++){
 $sql = 'SELECT * FROM `coffee-products` WHERE id=$ids';
 $query = $db->prepare($sql);
 $query->execute();
 $result = $query->fetchAll(PDO::FETCH_ASSOC);
  foreach ($result as $product.=$ids) {
    ?>
   <img id="image<?= +$ids ?>" src="<?= $product['productImage'] ?>" height="300px" width="300px">
   <p id="origin<?= +$ids ?>"><?= $product['productOrigin'] ?></p>
   <h3 id="nomProduit<?= +$ids ?>"><?= $product['productName'] ?></h2>
   <h3 id="prixBase<?= +$ids ?>"><?= $product['productBasePrice'] ?> €</h3>
  <?php
  }
}
?>