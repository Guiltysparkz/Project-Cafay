<?php

require_once('connect.php');

$sql = 'SELECT * FROM `coffee-products`';

//je prepare la requete 

$query = $db->prepare($sql);

$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);


require_once('close.php');

?>

<html>

<div class="container">
  <div class="Product-filter"></div>
  <div class="Product-categories"></div>
  <div class="Product-sliding">
<!--pseudo code: 
//Divide coffee/tea/equipment in separate pages to avoid complicated filtering through code.
//Maybe get key->values from looping in mysql or maybe find out if query->fetchALL creates a workable array
-->
  <?php
  foreach($result as $product) {
  ?>
  <img src="<?= $product['productImage'] ?>" height="300px" width="300px">
  <p><?= $product['productOrigin'] ?></p>
  <h3><?= $product['productName'] ?></h2>
  <h3><?= $product['productBasePrice'] ?> €</h3>
  <?php
  }
  ?>
  <img src="<?= $product['productImage'] ?>" height="300px" width="300px">
  <p><?= $product['productOrigin'] ?></p>
  <h3><?= $product['productName'] ?></h2>
  <h3><?= $product['productBasePrice'] ?> €</h3>
  </div>
</div>

<style>
    /*Grid layout start*/
    .container {  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
  grid-template-rows: 0.5fr 1fr 1fr 1fr 1fr 1fr 1fr;
  gap: 0px 0px;
  grid-auto-flow: row;
  grid-template-areas:
    ". Product-filter Product-filter Product-filter Product-filter ."
    ". Product-categories Product-sliding Product-sliding Product-sliding ."
    ". Product-categories Product-sliding Product-sliding Product-sliding ."
    ". Product-categories Product-sliding Product-sliding Product-sliding ."
    ". Product-categories Product-sliding Product-sliding Product-sliding ."
    ". . Product-sliding Product-sliding Product-sliding ."
    ". . Product-sliding Product-sliding Product-sliding .";
}

.Product-filter { grid-area: Product-filter; }

.Product-categories { grid-area: Product-categories; }

.Product-sliding { grid-area: Product-sliding; }
    /*Grid layout end*/

  .Product-sliding {
    display: box flex;
    height: 1000px;
    width: 1000px;
    flex-wrap: nowrap;
    flex-direction: row;
    justify-content: flex-start;
    
  }

</style>

</html>