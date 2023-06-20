<?php
if(!empty($_POST['userPassword'])){

    function cleandata($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}
$userNickname = cleandata($_POST['userNickname']);
}else{
    echo 'probleme';
}



if(!empty($_POST['userPassword']) && preg_match('#(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[@!?*$.+-]).{6,18}#', $_POST['userPassword']) &&!empty($userNickname)){
    try{
        require_once './bdd.php';
        $req = $pdo->prepare('SELECT * FROM useraccounts WHERE tokenconfirmed IS NOT NULL AND userNickname = :pseudale ');
        $req->bindParam(':pseudale', $userNickname);
        $req->execute();
        $userdata = $req->fetch(PDO::FETCH_OBJ);
    }catch(PDOException $e){
        echo 'Erreur : ' . $e;
    }finally{
        if(!empty($userdata) && password_verify($_POST['userPassword'], $userdata->userPassword)){
            session_start();
            $_SESSION['auth'] = $userdata;
            print_r($_SESSION['auth']) ;
           header('location:../index.php');
        }else{
            echo 'c\'est pas bon du';
        }
    }
}else{
    echo 'sa ne fonctionne pas';
}
?>