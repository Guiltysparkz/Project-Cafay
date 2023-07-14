<?php
include './include/header.php';
?>

<style>

body{
    display: flex;
    justify-content: center;
    align-items: center;
}
fieldset{
    width: 50vw;
    background-color: lightskyblue;
    border: 5px dashed blue;
    margin-top: 30vh;
    box-shadow:  10px 10px 10px blue;
}
form{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
label + input{
    margin: 15px;
    background-color: white;
    border:5px solid black;
}

</style>

<fieldset>

<legend>LOGIN</legend>
<form action="./include/log.php" method="post">
    
    <label for="userNickname">Identifiant</label>
    <input type="text" name="userNickname" id="userNickname" required pattern="^[A-Za-z'-]+$">
    <label for="userPassword">mot de passe</label>
    
    /*^ asserts the start of the string.
    (?=.*[A-Z]) requires at least one uppercase letter.
    (?=.*[a-z]) requires at least one lowercase letter.
    (?=.*\d) requires at least one digit.
    (?=.*[@!?*$.+-]) requires at least one special character from the specified set (@!?*$.+-).
    [A-Za-z\d@!?*$.+-]{6,20} matches between 6 and 20 characters from the specified character set.
    $ asserts the end of the string.*/
    
    <input type="password" name="userPassword" id="userPassword" required pattern="/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@!?*$.+-])[A-Za-z\d@!?*$.+-]{6,20}$/">
<input type="submit" value="Envoie">


    </form>

    </fieldset>

<?php
include './include/footer.php';

?>










