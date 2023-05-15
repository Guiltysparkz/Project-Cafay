<html>
<div class="container">
    <div class="Social-media">
     <div class="social-media-logo1">
        <img src="fblogofinal_200pxsqr.png" height="50px" width="50px" alt="fblogofinal_200pxsqr.png" srcset="">   
      </div>
     <div class="social-media-logo2">
      <img src="instagramlogofinal_200pxsqr.png" height="50px" width="50px" alt="instagramlogofinal_200pxsqr.png" srcset="">
      </div>
    </div>  
     <div class="Header">
      <div class="promotion">
        <h2> Livraison offerte dès 15€ en France. </h2>
      </div>
     </div>
    <div class="Fond-video">
     <video height=80% width=100% muted>
     <source src="kawa-coffee-video-1.mp4" type="video/mp4">
     </video>
     </div>
     <div class="Menu-gauche">
      <ul>
        <li><a href="Boutique.php"><h2>Boutique</h2></a></li>
        <li><a href="Abonnement.php"><h2>Abonnement</h2></a></li>
        <li><a href="Histoire.php"><h2>Histoire</h2></a></li>
      </ul>
     </div>
     <div class="Menu-droite">
      <ul>
        <li><a href="Professionels.php"><h2>Professionels</h2></a></li>
        <li><a href="Mon-compte.php"><h2>Mon compte</h2></a></li>
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
  </div>

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
    .Fond-video { grid-area: 2 / 1 / 6 / 6; }
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
        display: flex;
        z-index: -1;
        
    }
    .Menu-gauche {
      display: flex;
      padding-left: 50%;
      height: fit-content;
      width: fit-content;
    }
    .Menu-droite {
      display: flex;
      justify-content: center;
      height: fit-content;
      width: fit-content;
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
      z-index: -1;
    }
    .Texte-centre {
      display: flex;
      flex-wrap: wrap;
      flex-direction: column;
      justify-content: center;
      align-content: center;
      text-align: center;
    }

    

</style>
</html>