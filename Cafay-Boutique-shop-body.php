<?php



?>

<html>

<div class="container">
  <div class="Product-filter">

    <!-- Control buttons -->
    <div id="coffeeFilter">
      <button class="btn" onclick="filterSelection('classic80+')"> Les classiques | 80+</button>
      <button class="btn" onclick="filterSelection('seasonal84+')"> Les cafés de saison | 84+</button>
      <button class="btn" onclick="filterSelection('limitedEdition87+')"> Les éditions limitées | 87+</button>
      <button class="btn" onclick="filterSelection('competition90+')"> Les lots de compétition | 90+</button>
    </div>

  </div>
  <div class="Product-categories">

    <!-- Control buttons -->
    <div id="coffeeFilter">
      <h2>Torréfaction</h2>
      <button class="btn" onclick="filterSelection('Espresso')"> Espresso</button>
      <button class="btn" onclick="filterSelection('Filtre')"> Filtre</button>
      <button class="btn" onclick="filterSelection('Machine auto')"> Machine auto</button>
      <h2>Méthode</h2>
      <button class="btn" onclick="filterSelection('Lavée')"> Lavée</button>
      <button class="btn" onclick="filterSelection('Naturelle & Honey')"> Naturelle & honey</button>
      <button class="btn onclick" onclick="filterSelection('Anaérobie Naturelle')"> Anaérobie Naturelle</button>
      <h2>Notre sélection</h2>
      <button class="btn" onclick="filterSelection('Cooperative')"> Cooperative</button>
      <button class="btn" onclick="filterSelection('Bio')"> Bio</button>
      <button class="btn" onclick="filterSelection('Déca')"> Déca</button>
      <button class="btn" onclick="filterSelection('Édition limitée')"> Édition limitée</button>
      <button class="btn onclick" onclick="filterSelection('producteur')"> Producteur</button>
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
    <div class="card" id="card" 
    data-torrefaction="<?=$product['productTorrefactionMethod']?>"
    data-method="<?=$product['productWashingMethod']?>"
    data-selection="<?=$product['productProductionType']?>"
    data-aromatique="<?=$product['productScentProfile']?>">
    <img id="image<?= $product['productImage'] ?>" src="<?= $product['productImage'] ?>" height="300px" width="300px">
    <div class="containerCard">
    <p id="origin<?= $product['productOrigin'] ?>"><?= $product['productOrigin'] ?></p>
    <h3 id="nomProduit<?= $product['productName'] ?>"><?= $product['productName'] ?></h2>
    <h3 id="selectionBase<?= $product['productBasePrice'] ?>">A partir de <?= $product['productBasePrice'] ?> €</h3>
    </div>
    </div>
    <?php
    }
  }
  ?>


  </div>
</div>

<style>

#filterDiv {
  float: left;
  background-color: #2196F3;
  color: #ffffff;
  width: 100px;
  line-height: 100px;
  text-align: center;
  margin: 2px;
  display: none;
}

.show {
  display: block;
}

#coffeeFilter {
  margin-top: 20px;
  overflow: hidden;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}

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
    }

    .card {
  /* Add shadows to create the "card" effect */
  
  display: flex;
  flex-direction: column;
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
}

</style>

<script>

// Récupérer les éléments du DOM
// j'effectue tous mes récupération
const filtre_torrefaction = document.getElementById('filtre_torrefaction');
const filtre_method = document.getElementById('filtre_method');
const filtre_selection = document.getElementById('filtre_selection');
const filtre_aromatique = document.getElementById('filtre_aromatique');
const cards = document.querySelectorAll('.card');

// Ajouter des  d'événements pour les filtres
filtre_torrefaction.addEventListener('change', filterCards);
filtre_method.addEventListener('change', filterCards);
filtre_selection.addEventListener('change', filterCards);
filtre_aromatique.addEventListener('change', filterCards);

// Fonction de filtrage des éléments
function filterCards() {
  const selectedtorrefaction = filtre_torrefaction.value;
  const selectedmethod = filtre_method.value;
  const selectedselection = filtre_selection.value;
  const selectedaromatique = filtre_selection.value;

  // Parcourir les éléments et les afficher ou les masquer en fonction des filtres
  cards.forEach((card) => {
    const cardtorrefaction = card.getAttribute('data-torrefaction');
    const cardmethod = card.getAttribute('data-method');
    const cardselection = card.getAttribute('data-selection');
    const cardaromatique = card.getAttribute('data-aromatique');

    if (
      (selectedtorrefaction === 'all' || selectedtorrefaction === cardtorrefaction) &&
      (selectedmethod === 'all' || selectedmethod === cardmethod) &&
      (selectedselection === 'all' || selectedselection === cardselection) &&
      (selectedaromatique === 'all' || selectedaromatique === cardaromatique)
    ) {
      card.style.display = 'block';
    } else {
      card.style.display = 'none';
    }
  });
}

// Afficher tous les éléments au chargement de la page
filterCards();

</script>

</html>