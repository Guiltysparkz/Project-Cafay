<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cafay-accueil-body.php</title>
</head>
<body>
<div class="container">
    <div class="Social-media">
     <div class="social-media-logo1">
     <button onclick="window.location.href='https://www.facebook.com/kawacoffeefrance/'" style="background-color: transparent; border:none;" alt="facebook.com/kawacoffeefrance">
        <img src="fblogofinal_200pxsqr.png" height="50px" width="50px" alt="fblogofinal_200pxsqr.png" srcset="">
     </button>
      </div>
     <div class="social-media-logo2">
     <button onclick="window.location.href='https://www.instagram.com/kawa.coffee/'" style="background-color: transparent; border:none;" alt="instagram.com/kawa.coffee">
      <img src="instagramlogofinal_200pxsqr.png" height="50px" width="50px" alt="instagramlogofinal_200pxsqr.png" srcset="">
     </button>
      </div>
    </div>  
     <div class="Header">
      <div class="promotion">
        <h2> Livraison offerte dès 15€ en France. </h2>
      </div>
     </div>
     <div class="Fond-video">
  <div class="video-container">
    <video autoplay muted loop id="fondVideo">
      <source src="kawa-coffee-video-1.mp4" type="video/mp4">
    </video>
    <button id="boutonVideo" onclick="toggleVideo()">Pause</button>
  </div>
</div>

     <div class="Menu-gauche">
      <ul>
        <li><button onclick="window.location.href='./Cafay-Boutique-shop.php'"><h2>Boutique</h2></button></li>
        <li><button onclick="window.location.href='./Abonnement.php'"><h2>Abonnement</h2></button></li>
        <li><button onclick="window.location.href='./Histoire.php'"><h2>Histoire</h2></button></li>
      </ul>
     </div>
     <div class="Menu-droite">
      <ul>
        <li><button onclick="window.location.href='./Professionels.php'"><h2>Professionels</h2></button></li>
        <li><button onclick="window.location.href='./Mon-compte.php'"><h2>Mon compte</h2></button></li>
       </ul>
     </div>
     <div class="Logo">
      <img src="./Logo-Cafay-final.png" height=20% width=20% alt="Logo-Cafay-final.png" srcset="">
      <img src="./Titre-Cafay-final.png" height=20% width=20% alt="Titre-Cafay-final.png" srcset="">
     </div>
     <div class="Texte-centre">
      <h1>Torréfier avec passion à [REDACTED]</h1>
      <h2>Cafés de spécialité</h2>
      <h2>en direct des producteurs</h2>
     </div>
     <div class="troisqualitesContainer">
        <div class="troisqualites">
                <div class="directprod">
                  <img src="./directprod.svg">
                  <p>En direct des producteurs</p>
                  <p>Nous sourçons les meilleurs cafés<br>directement auprès des producteurs.</p>
                </div>
              <div class="torrefart">
                  <img src="./torrefart.svg">
                  <p>Torréfaction artisanale</p>
                  <p>Chaque café est fraîchement torréfié et<br>moulu pour vos jolies papilles.</p>
              </div>
                <div class="livraison">
                  <img src="./livraison.svg">
                  <p>Livraison ultra-rapide</p>
                  <p>Nos paquets sont expédiés le jour de votre<br>commande et livrés sous 48h.</p>
                </div>
        </div>
       </div>
     </div>
     <div class="aboContainer">
      <div class="aboTexteContainer">
        <div class="abotexte">
          <h2>ABONNEMENT DECOUVERTE</h2>
          <h1>Recevez tous les mois des cafés d'exceptions en série limitée.</h1>
          <p>Découvrez des terroirs différents tous les mois et des cafés exclusifs pour les abonnés.<br>Recevez des privilèges abonnés pour bénéficier de prix réduits sur vos accessoires.</p>
          <button id="boutonAbo" onclick="window.location.href='./abo-decouverte.php'">
          JE M'ABONNE
          </button>
        </div>
        </div>
        <div class="aboImageContainer">
          <div class="aboimage">
            <img src="./aboimage.png" alt="">
          </div>
        </div>
     </div>
  </body>
  </html>
<style>
    /*Grid layout start*/
    .container {  
    display: grid;
    grid-template-columns: repeat(5, 20%);
    grid-template-rows: repeat(5, 20%);
    gap: 0px 0px;
    grid-auto-flow: row;
    }
    
    .Social-media { grid-area: 1 / 1 / 2 / 2; }
    .Header { grid-area: 1 / 1 / 2 / 6; }
    .Fond-video { grid-area: 2 / 1 / 6 / 6; position: relative; }
    .video-overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; }
    .Menu-gauche { grid-area: 2 / 1 / 3 / 3; }
    .Menu-droite { grid-area: 2 / 4 / 3 / 6; }
    .Logo { grid-area: 2 / 2 / 3 / 5; }
    .Texte-centre { grid-area: 3 / 2 / 5 / 5; }
    /*Grid layout end*/

    .Social-media {
        display:flex;
        overflow: visible;
    }
    .Header {
        display:flex;
        flex-direction: row;
        justify-content:center;
        align-items: center;
        height: 3em;
        width: 5fr;
        z-index: -1;
        
    }
    .promotion {
        display:flex;
        justify-content:center;
        font-weight: bold;
    }
    .Fond-video {
  position: relative;
  width: 100%;
  height: 0;
  padding-bottom: 56.25%; /* Aspect ratio: 16:9 (adjust as needed) */
}

.video-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

#fondVideo {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

#boutonVideo {
  position: absolute;
  bottom: 20px;
  left: 20px;
  z-index: 1;
  background: transparent;
  color: white;
  font-size: 18px;
  padding: 10px;
  border: none;
  cursor: pointer;
}

    #boutonVideo:hover {
      background: #ddd;
      color: black;
    }
    .Menu-gauche {
      display: flex;
      padding-left: 40%;
      z-index: 1;
    }
    .Menu-droite {
      display: flex;
      justify-content: center;
      z-index: 1;
    }
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }
    li {
      float: left;
    }
    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    li a:hover {
      background-color: #111;
    }
    .Logo {
      display: flex;
      flex-wrap: wrap;
      flex-direction: column-reverse;
      height: auto;
      width: auto;
      justify-content: start;
      align-content: center;
      filter: invert(100%);
    }
    .Texte-centre {
      display: flex;
      flex-wrap: wrap;
      flex-direction: column;
      justify-content: center;
      align-content: center;
      text-align: center;
      color: white;
    }
    .troisqualitesContainer {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 500%;
    }
    .troisqualites {
      display: flex;
      flex-direction: row;
    }
    .directprod {
      padding-left: 50px;
      padding-right: 50px;
    }
    .torrefart {
      padding-left: 50px;
      padding-right: 50px;
    }
    .livraison {
      padding-left: 50px;
      padding-right: 50px;
    }
    .aboContainer {
      display: flex;
      flex-direction: row;
      width: 100%;
    }
    .abotexte {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .aboTexteContainer {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 75%;
    }
    button {
    appearance: none;
    background-color: transparent;
    border: 0.125em solid #1A1A1A;
    border-radius: 0.9375em;
    box-sizing: border-box;
    color: #3B3B3B;
    cursor: pointer;
    display: inline-block;
    font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    font-size: 16px;
    font-weight: 600;
    line-height: normal;
    margin: 0;
    min-height: 3.75em;
    min-width: 0;
    outline: none;
    padding: 1em 2.3em;
    text-align: center;
    text-decoration: none;
    transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    will-change: transform;
    }

    button:disabled {
    pointer-events: none;
    }

    button:hover {
    color: #fff;
    background-color: #1A1A1A;
    box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
    transform: translateY(-2px);
    }

    button:active {
    box-shadow: none;
    transform: translateY(0);
    }
    .aboImageContainer {
          display: flex;
          width: 50%;
    }
    p {
      font-size: large;
    }
    .video-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

</style>

<script>
// Get the video
var video = document.getElementById("fondVideo");

// Get the button
var btn = document.getElementById("boutonVideo");

// Pause and play the video, and change the button text
function toggleVideo() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>


