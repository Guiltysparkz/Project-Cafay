<?php 

require_once('connect.php');

for ($ids = 1; $ids < 5; $ids++){
$sql = "SELECT * FROM coffee WHERE productID=$ids";
$query = $db->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
  foreach ($result as $product) {
    ?>
  <div class="card" id="card<?= $product['productID'] ?>">
  <img id="image<?= $product['productImage'] ?>" src="<?= $product['productImage'] ?>" height="300px" width="300px">
  <div class="containerCard">
  <p id="origin<?= $product['productOrigin'] ?>"><?= $product['productOrigin'] ?></p>
  <h3 id="nomProduit<?= $product['productName'] ?>"><?= $product['productName'] ?></h2>
  <h3 id="prixBase<?= $product['productBasePrice'] ?>">A partir de <?= $product['productBasePrice'] ?> €</h3>
  </div>
  </div>
  <?php
  }
}
?>