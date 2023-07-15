<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form action="./inscriptionProcessing.php" style="border:1px solid #ccc" method="post">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="userEmail">Adresse mail</label>
    <input type="email" name="userEmail" id="userEmail" required pattern="^[A-Za-z0-9'.-]+@{1}[A-Za-z]+\.{1}[A-Za-z0-9'.-]{2,}$">

    <!-- max sert a indiquer le nombre maximun de cractére acceptable pour le nom utilisateur ne peut eétre dépasser -->
<!--^ asserts the start of the string.
    (?=.*[A-Z]) requires at least one uppercase letter.
    (?=.*[a-z]) requires at least one lowercase letter.
    (?=.*\d) requires at least one digit.
    (?=.*[@!?*$.+-]) requires at least one special character from the specified set (@!?*$.+-).
    [A-Za-z\d@!?*$.+-]{6,20} matches between 6 and 20 characters from the specified character set.
    $ asserts the end of the string.-->

    <label for="userPassword">mot de passe</label>
    <input type="password" name="userPassword" id="userPassword" required pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@!?*$.+-])[A-Za-z\d@!?*$.+-]{6,20}$">


    <label for="userPasswordConf">confirmer votre mot de passe</label>
    <input type="password" name="userPasswordConf" id="userPasswordConf" required pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@!?*$.+-])[A-Za-z\d@!?*$.+-]{6,20}$">
    
    <p>En créant un compte vous acceptez nos termes et conditions <a href="#" style="color:dodgerblue">Termes & Conditions</a>.</p>

    <div class="clearfix">
      <button type="reset" class="cancelbtn">Annuler</button>
      <button type="submit" class="signupbtn" value="Envoyer">S'inscrire</button>
    </div>
  </div>
</form>
</body>
</html>