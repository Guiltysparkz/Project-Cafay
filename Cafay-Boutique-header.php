<html>

<div class="container">
  <div class="Logo">
    <img src="Titre-Cafay-final.png" height=100px width=100px alt="Cafay" srcset="">
    <img src="Logo-Cafay-final.png" height=100px width=100px alt="Cafay" srcset="">
  </div>
  <div class="Menus">
  <div id="Menus">
   <div class="dropdown1">
    <a class="active" href="javascrip:void(0)"><button class="dropbtn1">Cafés</button></a>
     <div class="dropdown-content1">
    <h4>Scores SCA</h4>
     <a href="javascript:void(0)"<a href="#">Les classiques |80+</a></a>
     <a href="javascript:void(0)"<a href="#">Les cafés de saison|84+</a></a>
     <a href="javascript:void(0)"<a href="#">Les éditions limitées|87+</a></a>
     <a href="javascript:void(0)"<a href="#">Lots de compétition|90+</a></a>
    <h4>Sélection</h4>
     <a href="javascript:void(0)"<a href="#">Funky & Fruity</a></a>
     <a href="javascript:void(0)"<a href="#">Best Sellers</a></a>
     <a href="javascript:void(0)"<a href="#">Surnaturels</a></a>
     <a href="javascript:void(0)"<a href="#">Terroir</a></a>
    <h4>Torréfié pour</h4>
     <a href="javascript:void(0)"<a href="#">Filtre</a></a>
     <a href="javascript:void(0)"<a href="#">Espresso</a></a>
     <a href="javascript:void(0)"<a href="#">Machine Automatique</a></a>
     <h4>Typologie</h4>
     <a href="javascript:void(0)"<a href="#">Blends</a></a>
     <a href="javascript:void(0)"<a href="#">Direct Trade</a></a>
     <a href="javascript:void(0)"<a href="#">Les Bios</a></a>
     <a href="javascript:void(0)"<a href="#">Déca</a></a>
  </div>
  <div class="dropdown2">
    <a class="active" href="javascrip:void(0)"><button class="dropbtn2">Abonnements</button></a>
     <div class="dropdown-content2">
     <a href="javascript:void(0)"<a href="#">Découverte</a></a>
     <a href="javascript:void(0)"<a href="#">Gros buveur</a></a>
  </div>
  <div class="dropdown3">
    <a class="active" href="javascrip:void(0)"><button class="dropbtn3">Équipement</button></a>
     <div class="dropdown-content3">
        <h4>Type</h4>
     <a href="javascript:void(0)"<a href="#">Machines à café</a></a>
     <a href="javascript:void(0)"<a href="#">Accessoires Espresso</a></a>
     <a href="javascript:void(0)"<a href="#">Accessoires Filtre</a></a>
     <a href="javascript:void(0)"<a href="#">Libres & Prêt-à-porter</a></a>
        <h4>Par marque</h4>
     <a href="javascript:void(0)"<a href="#">Hario</a></a>
     <a href="javascript:void(0)"<a href="#">Cafec</a></a>
     <a href="javascript:void(0)"<a href="#">Kalita</a></a>
     <a href="javascript:void(0)"<a href="#">Delonghi</a></a>
        <h4>Catégorie</h4>
     <a href="javascript:void(0)"<a href="#">Drippers</a></a>
     <a href="javascript:void(0)"<a href="#">Filtres</a></a>
     <a href="javascript:void(0)"<a href="#">Bouilloires</a></a>
  </div>
  <div class="dropdown">
    <a class="active" href="javascrip:void(0)">Thés</a>


  <div class="dropdown">
    <a class="active" href="javascrip:void(0)">Professionels</a>


  <div class="dropdown">
    <a class="active" href="javascrip:void(0)">Histoire</a>

  <div class="dropdown">
    <a class="active" href="javascrip:void(0)">Mon compte</a>
</div> 
</div>
</div>
  <div class="Searchbar-Panier"></div>
  <div class="Searchbar"></div>
  <div class="Panier"></div>
  </div>
</div>

<style>
    /*Grid layout start*/
.container {  display: grid;
  grid-template-columns: repeat(5, 1fr);
  grid-template-rows: 1fr;
  gap: 0px 0px;
  grid-auto-flow: row;
  grid-template-areas:
    "Logo Menus Menus Menus Searchbar-Panier";
}
.Logo { grid-area: Logo; }
.Menus { grid-area: Menus; }
.Searchbar-Panier { grid-area: Searchbar-Panier; }
    /*Grid layout end*/

.Logo {
    display: flex;
    flex-direction: column;
}

.Menus {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
}

.dropdown1 {
  position: relative;
  display: inline-block;
  height: 50px;
  width: 72px;
}

.dropbtn1 {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown-content1 {
  display: none;
  width: 800px;
  height: 240px;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 170px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content1 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content1 a:hover {background-color: #ddd;}

.dropdown1:hover .dropdown-content1 {display: flex;flex-wrap: wrap;flex-direction: column;}

.dropdown1:hover .dropbtn1 {background-color: #3e8e41;}

.dropdown2 {
  position: relative;
  display: inline-block;
  height: 50px;
  width: 72px;
}

.dropbtn2 {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown-content2 {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content2 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content2 a:hover {background-color: #ddd;}

.dropdown2:hover .dropdown-content2 {display: flex;flex-wrap: wrap;justify-content: space-around;}

.dropdown2:hover .dropbtn2 {background-color: #3e8e41;}

.dropdown3 {
  position: relative;
  display: inline-block;
  height: 50px;
  width: 72px;
}

.dropbtn3 {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown-content3 {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content3 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content3 a:hover {background-color: #ddd;}

.dropdown3:hover .dropdown-content3 {display: flex;flex-wrap: wrap;justify-content: space-around;}

.dropdown3:hover .dropbtn3 {background-color: #3e8e41;}


.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}

</style>

<script>
window.onscroll = function() {myFunction()};

var Menus = document.getElementById("Menus");
var sticky = Menus.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    Menus.classList.add("sticky")
  } else {
    Menus.classList.remove("sticky");
  }
}
</script>

</html>