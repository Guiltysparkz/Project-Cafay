<?php
include './include/header.php';
?>


<style>
    body{
        height: 100vh;
        display: flex;
        justify-content: center;
    }
    form{
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-direction: column;
        color: yellow;
    }
    form input ~ label{
        margin: 15px;
        
    }
    form input{
        margin: 20px;
        padding: 5px;
        border: 2px solid yellow;
        border-radius: 10%;
        
    }
    fieldset{
        background-color: blue;
        height: 80vh;
        width: 50vw;
        border: 5px solid black;
        border-radius: 10%;
    }
    
  
  
</style>


<fieldset>
    <legend>INSCRIPTION</legend>
    <form action="./include/inscript.php" method="post">

    <label for="userNickname">Nom d'utilisateur</label>
    <input type="text" name="userNickname" id="userNickname" required pattern="^[A-Za-z'-]+$" max="20">
<!-- max sert a indiquer le nombre maximun de cractére acceptable pour le nom utilisateur ne peut eétre dépasser -->
<!--^ asserts the start of the string.
    (?=.*[A-Z]) requires at least one uppercase letter.
    (?=.*[a-z]) requires at least one lowercase letter.
    (?=.*\d) requires at least one digit.
    (?=.*[@!?*$.+-]) requires at least one special character from the specified set (@!?*$.+-).
    [A-Za-z\d@!?*$.+-]{6,20} matches between 6 and 20 characters from the specified character set.
    $ asserts the end of the string.-->

    <label for="userPassword">mot de passe</label>
    <input type="password" name="userPassword" id="userPassword" required pattern="/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@!?*$.+-])[A-Za-z\d@!?*$.+-]{6,20}$/">


    <label for="userPasswordConf">confirmer votre mot de passe</label>
    <input type="password" name="userPasswordConf" id="userPasswordConf" required pattern="/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@!?*$.+-])[A-Za-z\d@!?*$.+-]{6,20}$/">

 <!-- "^[A-Za-z0-9'-@!?*$.-]  pour caractéres spéciaux-->

    <label for="userEmail">Adresse mail</label>
    <input type="email" name="userEmail" id="userEmail" required pattern="^[A-Za-z0-9'.-]+@{1}[A-Za-z]+\.{1}[A-Za-z0-9'.-]{2,}$">

    <input type="submit" value="Envoyer">

    </form>
</fieldset>




