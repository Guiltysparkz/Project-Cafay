<?php



?>

<html>

<div class="container">
  <div class="Product-filter">

    <!-- Control buttons -->
    <div id="coffeeFilter">
      <button class="btn active" onclick="filterSelection('classic80+')"> Les classiques | 80+</button>
      <button class="btn" onclick="filterSelection('seasonal84+')"> Les cafés de saison | 84+</button>
      <button class="btn" onclick="filterSelection('limitedEdition87+')"> Les éditions limitées | 87+</button>
      <button class="btn" onclick="filterSelection('competition90+')"> Les lots de compétition | 90+</button>
    </div>

  </div>
  <div class="Product-categories">

    <!-- Control buttons -->
    <div id="coffeeFilter">
      <h2>Torréfaction</h2>
      <button class="btn active" onclick="filterSelection('Espresso')"> Espresso</button>
      <button class="btn" onclick="filterSelection('Filtre')"> Filtre</button>
      <button class="btn" onclick="filterSelection('Machine auto')"> Machine auto</button>
      <h2>Méthode</h2>
      <button class="btn" onclick="filterSelection('Lavée')"> Lavée</button>
      <button class="btn" onclick="filterSelection('Naturelle & Honey')"> Naturelle & honey</button>
      <button class="btn active" onclick="filterSelection('Anaérobie Naturelle')"> Anaérobie Naturelle</button>
      <h2>Notre sélection</h2>
      <button class="btn" onclick="filterSelection('Cooperative')"> Cooperative</button>
      <button class="btn" onclick="filterSelection('Bio')"> Bio</button>
      <button class="btn" onclick="filterSelection('Déca')"> Déca</button>
      <button class="btn" onclick="filterSelection('Édition limitée')"> Édition limitée</button>
      <button class="btn active" onclick="filterSelection('producteur')"> Producteur</button>
      <h2>Profil aromatique</h2>
      <button class="btn" onclick="filterSelection('Chocolaté et corsé')"> Chocolaté et corsé</button>
      <button class="btn" onclick="filterSelection('Fruité & Floral')"> Fruité & Floral</button>
    </div>

  </div>
  <div class="Product-sliding">



  <?php 

  require_once('connect.php');

  $sql = "SELECT productID FROM coffee";
  $query = $db->prepare($sql);
  $query->execute();
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
  $idCount = count($result);

  for ($ids = 1; $ids <= $idCount; $ids++){
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
    display: flex;
    height: fit-content;
    width: fit-content;
    flex-wrap: wrap;
    flex-direction: row;
    justify-content: flex-start;
    align-items: flex-start;
    }

    .card {
  /* Add shadows to create the "card" effect */
  
  display: flex;
  flex-direction: column;
  align-items: center;
  padding-top: 8px;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.containerCard {
  padding: 2px 8px;
  height: fit-content;
  width: 300px;
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  justify-content: center;
  align-items: left;
}

</style>

</html>