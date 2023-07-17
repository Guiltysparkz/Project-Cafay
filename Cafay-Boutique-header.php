<!DOCTYPE html>
<html>
  <head>
    <title>Cafay-Boutique-header</title>
  </head>
<html>
<div class="container">
  <div class="Logo">
    <img src="Titre-Cafay-final.png" height=100px width=100px alt="Cafay" srcset="">
    <img src="Logo-Cafay-final.png" height=100px width=100px alt="Cafay" srcset="">
  </div>
  <div class="Menus">
  <div id="Menus">
   <div class="dropdown1">
    <a class="active" href="./Cafay-Boutique-shop.php"><button class="dropbtn1">Cafés</button></a>
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
   </div>
  <div class="dropdown2">
    <a class="active" href="javascript:void(0)"><button class="dropbtn2">Abonnements</button></a>
     <div class="dropdown-content2">
     <a href="javascript:void(0)"<a href="#">Découverte</a></a>
     <a href="javascript:void(0)"<a href="#">Gros buveur</a></a>
     </div>
  </div>
  <div class="dropdown3">
    <a class="active" href="javascript:void(0)"><button class="dropbtn3">Équipement</button></a>
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
  </div>
  <div class="dropdown4">
  <a class="active" href="javascript:void(0)"><button class="dropbtn4">Thés</button></a>
  </div>


  <div class="dropdown5">
  <a class="active" href="javascript:void(0)"><button class="dropbtn5">Professionels</button></a>
  </div>


  <div class="dropdown6">
  <a class="active" href="javascript:void(0)"><button class="dropbtn6">Histoire</button></a>
  </div>

  <div class="dropdown7">
  <a class="active" href="javascript:void(0)"><button class="dropbtn7">Mon compte</button></a>
</div> 
</div>
</div>
  <div class="Searchbar-Panier">
   <div class="Searchbar">
   <form action="searchresult.php" method="GET">
  <input type="text" name="query" placeholder="Search for products">
  <button type="submit">Search</button>
</form>

   </div>
  <div class="Panier"></div>
  <div class="Connexion">
    <?php include ('./include/login.php'); ?>
  </div>
  </div>
  <?php
    // Check if the user has already made a decision
    $accepted = isset($_COOKIE['privacy_accepted']);
  
    // If the user has not made a decision
    if (!$accepted) {
      echo '
        <div id="privacyPopup" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #ffffff; padding: 20px; border: 1px solid #000000; z-index: 4;">
          <h2>Privacy Notice</h2>
          <p>This website uses cookies to enhance your experience. By continuing to use this site, you consent to the use of cookies in accordance with our <a href="privacy_policy.php">Privacy Policy</a>.</p>
          <button onclick="acceptPrivacy()">Accept</button>
          <button onclick="refusePrivacy()">Refuse</button>
        </div>
      ';
    }
  ?>
</div>

<style>
    /*Grid layout start*/
    .container {
      display: grid;
      grid-template-columns: auto repeat(3, 1fr) auto;
      grid-template-rows: 1fr;
      gap: 0px 0px;
      grid-auto-flow: row;
      grid-template-areas: "Logo Menus Menus Menus Searchbar-Panier";
    }

    .Logo {
      grid-area: Logo;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    .Menus {
      grid-area: Menus;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      z-index: 2;
    }

    .Searchbar-Panier {
      grid-area: Searchbar-Panier;
    }
    /* Grid layout end */

    /* Additional styling */
    .container {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
    }

    .Logo {
      display: flex;
      flex-direction: column;
    }

    .Logo,
    .Menus,
    .Searchbar-Panier {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px;
    }

    .Searchbar-Panier .Panier {
      display: flex;
      height: fit-content;
      width: fit-content;
    }

    .Searchbar-Panier .Searchbar {
      display: flex;
      height: fit-content;
      width: fit-content;
    }

    .Searchbar-Panier .Connexion {
      display: flex;
      height: fit-content;
      width: fit-content;
    }

.Menus #Menus {
    display: flex;
    flex-direction: row;
    width: fit-content;
    height: fit-content;
}

.dropdown1 {
  position: relative;
  display: inline-block;
  height: fit-content;
  width: fit-content;
}

.dropbtn1 {
  color: black;
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
  text-align: center;
}

.dropdown-content1 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content1 a:hover {background-color: #ddd;}

.dropdown1:hover .dropdown-content1 {display: flex;flex-wrap: wrap;flex-direction: column;}

.dropdown2 {
  position: relative;
  display: inline-block;
  height: fit-content;
  width: fit-content;
}

.dropbtn2 {
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown-content2 {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: fit-content;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  text-align: center;
}

.dropdown-content2 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content2 a:hover {background-color: #ddd;}

.dropdown2:hover .dropdown-content2 {display: flex;flex-wrap: wrap;justify-content: space-around;}

.dropdown3 {
  position: relative;
  display: inline-block;
  height: fit-content;
  width: fit-content;
}

.dropbtn3 {
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown-content3 {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  width: 500px;
  height: 240px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  text-align: center;
}

.dropdown-content3 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content3 a:hover {background-color: #ddd;}

.dropdown3:hover .dropdown-content3 {display: flex;flex-wrap: wrap;flex-direction: column;}


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

.dropdown3 {
  position: relative;
  display: inline-block;
  height: fit-content;
  width: fit-content;
}

.dropbtn3 {
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.dropdown-content3 a:hover {background-color: #ddd;}

.dropdown3:hover .dropdown-content3 {display: flex;flex-wrap: wrap;flex-direction: column;}

.dropdown4 {
  position: relative;
  display: inline-block;
  height: fit-content;
  width: fit-content;
}

.dropbtn4 {
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.dropdown-content4 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content4 a:hover {background-color: #ddd;}

.dropdown5 {
  position: relative;
  display: inline-block;
  height: fit-content;
  width: fit-content;
}

.dropbtn5 {
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.dropdown-content5 a:hover {background-color: #ddd;}

.dropdown6 {
  position: relative;
  display: inline-block;
  height: fit-content;
  width: fit-content;
}

.dropbtn6 {
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.dropdown-content6 a:hover {background-color: #ddd;}

.dropdown7 {
  position: relative;
  display: inline-block;
  height: fit-content;
  width: fit-content;
}

.dropbtn7 {
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.dropdown-content7 a:hover {background-color: #ddd;}

/* Search bar */

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.searchbar a:hover {
  background-color: #ddd;
  color: black;
}

.searchbar a.active {
  background-color: #2196F3;
  color: white;
}

.searchbar input[type=text] {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}

@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  
  .searchbar input[type=text] {
    border: 1px solid #ccc;  
  }
}

</style>

<script>
    <?php
      // If the user has not made a decision
      if (!$accepted) {
        echo '
          window.onload = function() {
            var popup = document.getElementById("privacyPopup");
            popup.style.display = "block";
          };

          function acceptPrivacy() {
            // Set the cookie to indicate the user has accepted
            document.cookie = "privacy_accepted=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";
            
            // Close the pop-up
            var popup = document.getElementById("privacyPopup");
            popup.style.display = "none";
          }

          function refusePrivacy() {
            // Redirect the user to the legal details page
            window.location.href = "legal_details.php";
          }
        ';
      }
    ?>

    window.onscroll = function() {
      myFunction();
    };

    var Menus = document.getElementById("Menus");
    var sticky = Menus.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        Menus.classList.add("sticky");
      } else {
        Menus.classList.remove("sticky");
      }
    }
  </script>


</html>