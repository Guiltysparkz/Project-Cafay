<?php
require './functions.php';

if(!empty($_POST['userNickname']) && !empty($_POST['userEmail'])){
function cleandata($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}

$usname = cleandata($_POST['pseudo']);
$mail = cleandata($_POST['email']);

}else{
    header("location:../insc.php");
}

if(!empty($_POST['userPassword']) && !empty($_POST['mdpconf']) && preg_match('#(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.+-]).{6,18}#', $_POST['mdp']) && preg_match('#(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.+-]).{6,18}#', $_POST["mdpconf"]) && $_POST['mdp'] === $_POST['mdpconf']){

    $pass = $_POST["userPassword"];
    $hashed = password_hash($pass, PASSWORD_BCRYPT);

}else{
    header('location:../insc.php');

   echo 'erreur pas le bon mot pasword';
}

if(!empty($_POST) && !empty($hashed) && !empty($usname) && !empty($mail)){

try{
require_once './bdd.php';
    $req = $pdo->prepare("INSERT INTO exusers(userNickname, password, conftoken, userEmail) VALUES (:userNickname, :password, :conftoken, :userEmail)");
    $tok = token(60);
    $req->bindParam(':userNickname', $usname);
    $req->bindParam(':userPassword', $hashed);
    $req->bindParam(':conftoken', $tok);
    $req->bindParam(':userEmail', $mail);
    $req->execute();




}catch(PDOException $e){
    echo "Erreur : " . $e;

}finally{
    $usid = $pdo->lastInsertId();
    $pdo = null;
    echo "oh la la qui ne chante pas n'est pas un lillois";

    header("location:./confirm.php?id=" . $usid . "&token=" . $tok);

}

 }else{
    header("location:../insc.php");
echo 'tu sera maitre jeune padawan';
 



}



?>