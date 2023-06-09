<html>
<div class="container">
  <div class="Produits">
   <div class="Cafes-espresso">
    <div class="espresso-description"><h2>Cafés pour espresso</h2></div>
    <div class="espresso-img"><img src="espresso-final.png" alt="" srcset=""></div>
    <div class="espresso-btn"><h2>Découvrir</h2></div>
   </div>
   <div class="Cafes-funky-fruity">
   <div class="funky-fruity-description"><h2>Cafés Funky & Fruity</h2></div>
   <div class="funky-fruity-img"><img src="cafe-funkyfruity2.png" alt="" srcset=""></div>
    <div class="funky-fruity-btn"><h2>Explorer</h2></div>
   </div>
   <div class="Cafes-filtre">
   <div class="cafes-filtre-description"><h2>Cafés pour filtre</h2></div>
   <div class="filtre-img"><img src="cafe-filtrefinal2.png" alt="" srcset=""></div>
    <div class="filtre-btn"><h2>Voir les cafés</h2></div>
   </div>
   <div class="Accessoires-filtre">
   <div class="accessoires-filtre-description"><h2>Accessoires filtre</h2></div>
   <div class="accessoires-filtre-img"><img src="cafe-equipementfinal.png" alt="" srcset=""></div>
    <div class="accessoires-filtre-btn"><h2>Afficher</h2></div>
   </div>
  </div>
  <div class="Abonnement-marchandise">
   <div class="Abonnement">
   <div class="Abonnement-description">
    <h4>LES ABONNEMENTS</h4>
    <h2>Économisez 10% sur tous les cafés</h2>
    <h3>En vous abonnant ou dans nos formules découvertes.</h3>
</div>
    <div class="Abonnement-img"><img src="abonnement.jpeg" height="100%" width="100%" alt="" srcset=""></div>
   <div class="Abonnement-btn"><h2>En savoir+</h2></div>
</div>
   <div class="Marchandise"><img src="newsletter.jpeg" height="100%" width="100%" alt="" srcset="">
   <div class="Marchandise-btn"><h2>Afficher</h2></div>
</div>
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
    justify-content: space-around;
}
.Cafes-espresso {
    display: flex;
    flex-direction: column;
    max-height: fit-content;
    max-width: fit-content;
}
.Cafes-espresso .espresso-img {
    z-index: -1;
}
.Cafes-espresso .espresso-description {
    display: flex;
    position: relative;
    top: 12%;
    left: 27%;
    justify-content: center;
    align-content: center;
    color: white;
    max-height: fit-content;
    max-width: fit-content;
}
.Cafes-espresso .espresso-btn {
    display: flex;
    position: relative;
    top: -11%;
    left: 30%;
    justify-content: center;
    align-content: center;
    color: white;
    max-height: fit-content;
    max-width: 40%;
    background-color: 33140A;
    border-radius: 5%;
    opacity: 85%;
}
.Cafes-funky-fruity {
    display: flex;
    flex-direction: column;
    max-height: fit-content;
    max-width: fit-content;
}
.Cafes-espresso .funky-fruity-img {
    z-index: -1;
}
.Cafes-funky-fruity .funky-fruity-description {
    display: flex;
    position: relative;
    top: 12%;
    left: 24%;
    justify-content: center;
    align-content: center;
    color: white;
    max-height: fit-content;
    max-width: fit-content;
}
.Cafes-funky-fruity .funky-fruity-btn {
    display: flex;
    position: relative;
    top: -11%;
    left: 30%;
    justify-content: center;
    align-content: center;
    color: 33140A;
    max-height: fit-content;
    max-width: 40%;
    background-color: white;
    border-radius: 5%;
    opacity: 70%;
}
.Cafes-filtre {
    display: flex;
    flex-direction: column;
    max-height: fit-content;
    max-width: fit-content;
}
.Cafes-espresso .filtre-img {
    z-index: -1;
}
.Cafes-filtre .cafes-filtre-description {
    display: flex;
    position: relative;
    top: 12%;
    left: 27%;
    justify-content: center;
    align-content: center;
    color: black;
    max-height: fit-content;
    max-width: fit-content;
}
.Cafes-filtre .filtre-btn {
    display: flex;
    position: relative;
    top: -11%;
    left: 30%;
    justify-content: center;
    align-content: center;
    color: white;
    max-height: fit-content;
    max-width: 40%;
    background-color: 33140A;
    border-radius: 5%;
    opacity: 85%;
}
.Accessoires-filtre {
    display: flex;
    flex-direction: column;
    max-height: fit-content;
    max-width: fit-content;
}
.Cafes-espresso .accessoires-filtre-img {
    z-index: -1;
}
.Accessoires-filtre .accessoires-filtre-description {
    display: flex;
    position: relative;
    top: 12%;
    left: 27%;
    justify-content: center;
    align-content: center;
    color: black;
    max-height: fit-content;
    max-width: fit-content;
}
.Accessoires-filtre .accessoires-filtre-btn {
    display: flex;
    position: relative;
    top: -11%;
    left: 30%;
    justify-content: center;
    align-content: center;
    color: 33140A;
    max-height: fit-content;
    max-width: 40%;
    background-color: white;
    border-radius: 5%;
    opacity: 70%;
}
.Abonnement-marchandise {
    display: flex;
    justify-content: space-around;
}
.Abonnement {
    flex-direction: column;
    height: 450px;
    width: 650px;
}
.Abonnement-description {
    display: flex;
    flex-direction: column;
    z-index: +1;
    display: flex;
    position: relative;
    top: 2%;
    left: 5%;
    justify-content: center;
    align-content: center;
    color: 33140A;
    max-height: fit-content;
    max-width: fit-content;
}
.Abonnement-img {
    display: flex;
    position: relative;
    top: -42%;
    z-index: -1;
}
.Abonnement-btn {
    display: flex;
    z-index: +1;
    position: relative;
    bottom: 60%;
    left: 37%;
    justify-content: center;
    align-content: center;
    color: white;
    max-height: fit-content;
    max-width: 25%;
    background-color: 33140A;
    border-radius: 5%;
    opacity: 85%;
}
.Marchandise {
    display: flex;
    height: 450px;
    width: 650px;
}
</style>
</html>