<html>
<div class="container">
  <div class="Produits">
   <div class="Cafes-espresso">
    <div class="espresso-description"><h2>Cafés pour espresso</h2></div>
    <img src="espresso-final.png" alt="" srcset="">
   </div>
   <div class="Cafes-funky-fruity">
    <img src="cafe-funkyfruity2.png" alt="" srcset="">
   </div>
   <div class="Cafes-filtre">
    <img src="cafe-filtrefinal2.png" alt="" srcset="">
   </div>
   <div class="Accessoires-filtre">
    <img src="cafe-equipementfinal.png" alt="" srcset="">
   </div>
  </div>
  <div class="Abonnement-marchandise">
   <div class="Abonnement"></div>
   <div class="Marchandise"></div>
  </div>
  <div class="Equipement">
   <div class="Equipement3"></div>
   <div class="Equipement1"></div>
   <div class="Equipement2"></div>
   <div class="Page-Equipement"></div>
  </div>
  <div class="Boutique-locale">
   <div class="Addresse"></div>
  </div>
  <div class="Newsletter-Parrainage">
   <div class="Newsletter"></div>
   <div class="Parrainage"></div>
  </div>
  <div class="Social-media-promotion"></div>
</div>

<style>
    /*Grid layout start*/
    .container {  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
  grid-template-rows: 1.5fr 1.5fr 1fr 1fr 1.5fr 1.5fr 1fr 1fr 1fr 1fr 1fr 1fr;
  gap: 0px 0px;
  grid-auto-flow: row;
}

.Produits { grid-area: 1 / 2 / 3 / 6; }

.Abonnement-marchandise { grid-area: 3 / 2 / 5 / 6; }

.Equipement { grid-area: 5 / 2 / 7 / 6; }

.Boutique-locale { grid-area: 7 / 2 / 9 / 6; }

.Newsletter-Parrainage { grid-area: 9 / 2 / 11 / 6; }

.Social-media-promotion { grid-area: 11 / 1 / 13 / 7; }

.Cafes-espresso { grid-area: 1 / 2 / 3 / 3; }

.Cafes-funky-fruity { grid-area: 1 / 3 / 3 / 4; }

.Cafes-filtre { grid-area: 1 / 4 / 3 / 5; }

.Accessoires-filtre { grid-area: 1 / 5 / 3 / 6; }

.Abonnement { grid-area: 3 / 2 / 5 / 4; }

.Marchandise { grid-area: 3 / 4 / 5 / 6; }

.Equipement3 { grid-area: 5 / 4 / 7 / 5; }

.Equipement1 { grid-area: 5 / 2 / 7 / 3; }

.Equipement2 { grid-area: 5 / 3 / 7 / 4; }

.Page-Equipement { grid-area: 5 / 5 / 7 / 6; }

.Addresse { grid-area: 7 / 2 / 9 / 3; }

.Newsletter { grid-area: 9 / 2 / 11 / 4; }

.Parrainage { grid-area: 9 / 4 / 11 / 6; }
    /*Grid layout end*/

.Produits {
    display: block flex;
    flex-direction: row;
    justify-content: space-around;
}
.Cafes-espresso {
    max-height: 400px;
    max-width: 540px;
    
}
.espresso-description {
    position: relative;
    top: 15%;
    left: 25%;
    justify-content: center;
    align-content: center;
    color: white;
    height: fit-content;
    width: fit-content;
}
</style>
</html>