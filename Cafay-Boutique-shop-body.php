<!DOCTYPE html>
<html>
  <head>
    <title>Cafay-Boutique-shop-body</title>
  </head>

<div class="container-body">
  <div class="Product-filter">

  
    

  </div>
  <div class="Product-categories">
    <div id="lesCafesParScore">
      <h2>Les cafés</h2>
      <button class="btn" id="80"> Les classiques | 80+</button>
      <button class="btn" id="84"> Les cafés de saison | 84+</button>
      <button class="btn" id="87"> Les éditions limitées | 87+</button>
      <button class="btn" id="90"> Les lots de compétition | 90+</button>
    </div>
    
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
    data-productFilter="<?=$product['productFilter']?>"
    data-productID="<?=$product['productID']?>">
    <div class="image-container">
    <img id="<?= $product['productImage'] ?>" src="<?= $product['productImage'] ?>" height="300px" width="300px"><img id="<?= $product['productAltImage'] ?> hide" src="<?= $product['productAltImage'] ?>" height="300px" width="300px">
    </div>
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

      /*Grid layout start*/
      .container-body {  display: grid;
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

    /*Image transition*/
    .image-container {
  position: relative;
  width: 300px;
  height: 300px;
  overflow: hidden;
}

.image-container img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transition: opacity 0.5s ease;
}

.hide {
  opacity: 0;
}

/*Image transition */


#lesCafesParScore {
  display: inline-block;
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


  .Product-sliding {
    display: flex;
    height: fit-content;
    width: fit-content;
    flex-wrap: wrap;
    flex-direction: row;
    justify-content: space-around;
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
//Transition d'images (forcer la charge de la première image pour être sûr qu'elle sera là en premier avant la transition)
document.addEventListener('DOMContentLoaded', function() {
  var imageContainers = document.querySelectorAll('.image-container');

  imageContainers.forEach(function(container) {
    var images = container.querySelectorAll('img');
    var image1 = images[0];
    var image2 = images[1];

    // Add load event listener to the images
    image1.addEventListener('load', function() {
      // Initially hide the second image
      image2.style.display = 'none';
    });

    container.addEventListener('mouseenter', function() {
      image1.style.display = 'none';
      image2.style.display = 'inline-block';
    });

    container.addEventListener('mouseleave', function() {
      image1.style.display = 'inline-block';
      image2.style.display = 'none';
    });
  });

  // Filtres de cafés
  // Récupérer les éléments du DOM (pour afficher les filtres au chargement de la page)

  // j'effectue tous mes récupérations
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
  const cardElements = document.querySelectorAll('.card');

  // Ajouter des événements pour les filtres
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

  // Activer les filtres basés sur l'événement qui est actif
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

    // Vérifier s'il y a des filtres actifs
    const anyFiltersSelected =
      selectedEspresso ||
      selectedFiltre ||
      selectedMachineAuto ||
      selectedLavee ||
      selectedNaturelleEtHoney ||
      selectedAnaerobie ||
      selectedCooperative ||
      selectedBio ||
      selectedDeca ||
      selectedEditionLimitee ||
      selectedProducteur ||
      selectedChocolatEtCorse ||
      selectedFruiteEtFloral;

    // Afficher tous les éléments si aucun filtre n'est sélectionné
    if (!anyFiltersSelected) {
      cardElements.forEach((card) => {
        card.style.display = 'inline-block';
      });
      return;
    }

    // Parcourir les éléments et les afficher ou les masquer en fonction des filtres
    cardElements.forEach((card) => {
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
        card.style.display = 'inline-block';
      } else {
        card.style.display = 'none';
      }
    });
  }

  // Afficher tous les éléments au chargement de la page
  filterCards();

  // Add event listeners to each card element
  cardElements.forEach((card) => {
    card.addEventListener('click', () => {
      // Get the product ID from the card element or any other necessary data
      const productID = card.getAttribute('data-productID');

      // Redirect to the product page using the product ID
      window.location.href = "coffee.php?id="+ productID;
    });
  });
});




</script>

</html>