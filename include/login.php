<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
#buttonlogin {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

#buttonlogin:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgFormContainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.formContainer {
  padding: 16px;
}

span.userPassword {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 2; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 28%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

.imgFormContainer {
    height: fit-content;
    width: fit-content;
}

.formContainer {
    display: block;
    height: fit-content;
    width: fit-content;
    align-items: center;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.userPassword {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<button id="buttonlogin" onclick="document.getElementById('connexion').style.display='block';" style="width:auto;">Connexion</button>

<div id="connexion" class="modal">
  
  <form class="modal-content animate" action="./include/loginProcessing.php" method="post">
    <div class="imgFormContainer">
      <span onclick="document.getElementById('connexion').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="./Titre-Cafay-final.png" alt="Avatar" class="avatar">
    </div>

    <div class="formContainer">
      <label for="userEmail"><b>Email</b></label>
      <input type="email" placeholder="Enter User email" name="userEmail" id="userEmail" required pattern="^[A-Za-z0-9'.-]+@{1}[A-Za-z]+\.{1}[A-Za-z0-9'.-]{2,}$">

      <label for="userPassword"><b>Mot de passe</b></label>
      <input type="password" placeholder="Enter Password" name="userPassword" id="userPassword" required pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@!?*$.+-])[A-Za-z\d@!?*$.+-]{6,20}$">
        
      <button type="submit" id="buttonlogin">Se connecter</button>
    </div>

    <div class="formContainer" style="background-color:#f1f1f1">
      <button type="button" id="buttonlogin" onclick="document.getElementById('connexion').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="userPassword"><a href="./include/inscription.php">S'inscrire</a></span>
    
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('connexion');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>








