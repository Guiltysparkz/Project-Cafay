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

$userdata = null; // Define $userdata variable outside the try block
    //preg_match logic is such:
    /*^ asserts the start of the string.
    (?=.*[A-Z]) requires at least one uppercase letter.
    (?=.*[a-z]) requires at least one lowercase letter.
    (?=.*\d) requires at least one digit.
    (?=.*[@!?*$.+-]) requires at least one special character from the specified set (@!?*$.+-).
    [A-Za-z\d@!?*$.+-]{6,20} matches between 6 and 20 characters from the specified character set.
    $ asserts the end of the string.*/

if(!empty($_POST['userPassword']) 
    && preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@!?*$.+-])[A-Za-z\d@!?*$.+-]{6,20}$/', $_POST['userPassword']) 
    &&!empty($userNickname)){
    try{
        require_once './bdd.php';
        $req = $pdo->prepare('SELECT * FROM useraccounts WHERE tokenconfirmed IS NOT NULL AND userNickname = :userNickname ');
        $req->bindParam(':userNickname', $userNickname);
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
            var_dump(password_verify($_POST['userPassword'], $userdata->userPassword));
            echo "userdata:  ";
            var_dump($userdata);
        }
    }
}else{
    echo 'sa ne fonctionne pas';
}
?>