<html>
<div class="container">
     <div class="Header">
      <div class="social-media-logo1">
        <img src="fblogofinal_200pxsqr.png" height="50px" width="50px" alt="fblogofinal_200pxsqr.png" srcset="">   
      </div>
      <div class="social-media-logo2">
      <img src="instagramlogofinal_200pxsqr.png" height="50px" width="50px" alt="instagramlogofinal_200pxsqr.png" srcset="">
      </div>
      <div class="promotion">
        <p> "Livraison offerte dès 15€ en France." </p>
      </div>
     </div>
     <div class="Fond-video">
     <video width=max-content height=max-content autoplay loop muted>
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
      <img src="Logo-Cafay-final.png" height="746px" width="954px" alt="Logo-Cafay-final.png" srcset="">
      <img src="Titre-Cafay-final.png" height="821px" width="426px" alt="Titre-Cafay-final.png" srcset="">
     </div>
     <div class="Texte-centre">
      <h1>Torréfier avec passion à [REDACTED]</h1>
     </div>
     </div>




<style>
    /*Grid layout start*/
    .container {  
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    grid-template-rows: 1fr 1fr 1fr 1fr 1fr;
    gap: 0px 0px;
    grid-auto-flow: row;
    }
    .Header { grid-area: 1 / 1 / 2 / 6; }
    .Fond-video { grid-area: 2 / 1 / 6 / 6; }
    .Menu-gauche { grid-area: 2 / 1 / 3 / 3; }
    .Menu-droite { grid-area: 2 / 4 / 3 / 6; }
    .Logo { grid-area: 2 / 2 / 3 / 5; }
    .Texte-centre { grid-area: 3 / 2 / 5 / 5; }
    /*Grid layout end*/

    .promotion {
        display:flex;
        justify-content:center;
    }
    .social-media-logo1 {
        display:flex;
        flex-direction: row;
        justify-content:left;
    }
    .social-media-logo2 {
        display:flex;
        flex-direction: row;
        justify-content:left;
    }
    .Fond-video {
        display: flex;
    }
    .Menu-gauche {
      display: flex;
      justify-content: center;
    }
    .Menu-droite {
      display: flex;
      justify-content: center;
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
    }
    .Texte-centre {
      display: flex;
      justify-content: center;
    }

</style>
</html>