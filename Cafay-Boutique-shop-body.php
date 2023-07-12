<?php



?>

<html>

<div class="container">
  <div class="Product-filter">

    <!-- Control buttons -->
    <div id="coffeeFilter">
      <button class="btn" id="classic80+"> Les classiques | 80+</button>
      <button class="btn" id="seasonal84+"> Les cafés de saison | 84+</button>
      <button class="btn" id="limitedEdition87+"> Les éditions limitées | 87+</button>
      <button class="btn" id="competition90+"> Les lots de compétition | 90+</button>
    </div>

  </div>
  <div class="Product-categories">

    <!-- Control buttons -->
    <div id="filtre_cafe">
      <h2>Torréfaction</h2>
      <button class="btn" id="Espresso"> Espresso</button>
      <button class="btn" id="Filtre"> Filtre</button>
      <button class="btn" id="MachineAuto"> Machine auto</button>
      <h2>Méthode</h2>
      <button class="btn" id="Lavee"> Lavée</button>
      <button class="btn" id="NaturelleEtHoney"> Naturelle & honey</button>
      <button class="btn" id="Anaerobie"> Anaérobie Naturelle</button>
      <h2>Notre sélection</h2>
      <button class="btn" id="Cooperative"> Cooperative</button>
      <button class="btn" id="Bio"> Bio</button>
      <button class="btn" id="Deca"> Déca</button>
      <button class="btn" id="EditionLimitee"> Édition limitée</button>
      <button class="btn" id="Producteur"> Producteur</button>
      <h2>Profil aromatique</h2>
      <button class="btn" id="ChocolatEtCorse"> Chocolaté et corsé</button>
      <button class="btn" id="FruiteEtFloral"> Fruité & Floral</button>
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
    data-productFilter="<?=$product['productFilter']?>">
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
  const filtre_Espresso = document.getElementById('Espresso');
  const filtre_Filtre = document.getElementById('Filtre');
  const filtre_MachineAuto = document.getElementById('MachineAuto');
  const filtre_Lavee = document.getElementById('Lavee');
  const filtre_NaturelleEtHoney = document.getElementById('NaturelleEtHoney');
  const filtre_Anaerobie = document.getElementById('Anaerobie');
  const filtre_Cooperative = document.getElementById('Cooperative');
  const filtre_Bio = document.getElementById('Bio');
  const filtre_Deca = document.getElementById('Deca');
  const filtre_EditionLimitee = document.getElementById('EditionLimitee');
  const filtre_Producteur = document.getElementById('Producteur');
  const filtre_ChocolatEtCorse = document.getElementById('ChocolatEtCorse');
  const filtre_FruiteEtFloral = document.getElementById('FruiteEtFloral');
  const cards = document.querySelectorAll('.card');

// Ajouter des  d'événements pour les filtres
  filtre_Espresso.addEventListener('click', toggleFilter);
  filtre_Filtre.addEventListener('click', toggleFilter);
  filtre_MachineAuto.addEventListener('click', toggleFilter);
  filtre_Lavee.addEventListener('click', toggleFilter);
  filtre_NaturelleEtHoney.addEventListener('click', toggleFilter);
  filtre_Anaerobie.addEventListener('click', toggleFilter);
  filtre_Cooperative.addEventListener('click', toggleFilter);
  filtre_Bio.addEventListener('click', toggleFilter);
  filtre_Deca.addEventListener('click', toggleFilter);
  filtre_EditionLimitee.addEventListener('click', toggleFilter);
  filtre_Producteur.addEventListener('click', toggleFilter);
  filtre_ChocolatEtCorse.addEventListener('click', toggleFilter);
  filtre_FruiteEtFloral.addEventListener('click', toggleFilter);

//toggle filter function
  function toggleFilter(event) {
    event.target.classList.toggle('active');
    filterCards();
  }

// Fonction de filtrage des éléments
function filterCards() {
  const selectedEspresso = filtre_Espresso.classList.contains('active');
  const selectedFiltre = filtre_Filtre.classList.contains('active');
  const selectedMachineAuto = filtre_MachineAuto.classList.contains('active');
  const selectedLavee = filtre_Lavee.classList.contains('active');
  const selectedNaturelleEtHoney = filtre_NaturelleEtHoney.classList.contains('active');
  const selectedAnaerobie = filtre_Anaerobie.classList.contains('active');
  const selectedCooperative = filtre_Cooperative.classList.contains('active');
  const selectedBio = filtre_Bio.classList.contains('active');
  const selectedDeca = filtre_Deca.classList.contains('active');
  const selectedEditionLimitee = filtre_EditionLimitee.classList.contains('active');
  const selectedProducteur = filtre_Producteur.classList.contains('active');
  const selectedChocolatEtCorse = filtre_ChocolatEtCorse.classList.contains('active');
  const selectedFruiteEtFloral = filtre_FruiteEtFloral.classList.contains('active');


  // Parcourir les éléments et les afficher ou les masquer en fonction des filtres
  cards.forEach((card) => {
    const productFilter = card.getAttribute('data-productFilter');

    if (
      (selectedEspresso && /Espresso/.test(productFilter)) ||
      (selectedFiltre && /Filtre/.test(productFilter)) ||
      (selectedMachineAuto && /MachineAuto/.test(productFilter)) ||
      (selectedLavee && /Lavee/.test(productFilter)) ||
      (selectedNaturelleEtHoney && /NaturelleEtHoney/.test(productFilter)) ||
      (selectedAnaerobie && /Anaerobie/.test(productFilter)) ||
      (selectedCooperative && /Cooperative/.test(productFilter)) ||
      (selectedBio && /Bio/.test(productFilter)) ||
      (selectedDeca && /Deca/.test(productFilter)) ||
      (selectedEditionLimitee && /EditionLimitee/.test(productFilter)) ||
      (selectedProducteur && /Producteur/.test(productFilter)) ||
      (selectedChocolatEtCorse && /ChocolatEtCorse/.test(productFilter)) ||
      (selectedFruiteEtFloral && /FruiteEtFloral/.test(productFilter))
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