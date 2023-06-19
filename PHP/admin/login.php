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
    background-color: yellow;
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
    background-color: blue;
    border:25px dashed black;
}

</style>

<fieldset>

<legend>LOGIN</legend>
<form action="./include/log.php" method="post">
    
    <label for="userNickname">Identifiant</label>
    <input type="text" name="userNickname" id="userNickname" required pattern="^[A-Za-z'-]+$">
    <label for="userPassword">mot de passe</label>
    <input type="password" name="userPassword" id="userPassword" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.-]).{6,18}$">
<input type="submit" value="Envoie">


    </form>

    </fieldset>

<?php
include './include/footer.php';

?>










