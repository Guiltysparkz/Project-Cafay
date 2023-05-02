<html>
    <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Cafay-acceuil</title>
    </head>
    <body>
     <div class="container">
     <div class="Header">
      <div class="social-media-logo1">
        <img src="" alt="" srcset="">   
      </div>
      <div class="social-media-logo2">
      <img src="" alt="" srcset="">
      </div>
      <div class="promotion">
        <p> "Livraison offerte dès 15€ en France." </p>
      </div>
     </div>
     <div class="Fond-video">

     </div>
     <div class="Menu-gauche">

     </div>
     <div class="Menu-droite">

     </div>
     <div class="Logo">

     </div>
     <div class="Texte-centre">

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
</style>
    </body>
</html>