<?php
require './functions.php';
var_dump($_POST);

if (!empty($_POST['userNickname']) && !empty($_POST['userEmail'])) {
    function cleandata($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $usname = cleandata($_POST['userNickname']);
    $mail = cleandata($_POST['userEmail']);
} else {
    header("location:../insc.php");
    exit();
}


if (!empty($_POST['userPassword']) && !empty($_POST['userPasswordConf'])
   && $_POST['userPassword'] === $_POST['userPasswordConf']) {
    $pass = $_POST["userPassword"];
    
    // Regular expression pattern for password validation
    /*^ asserts the start of the string.
    (?=.*[A-Z]) requires at least one uppercase letter.
    (?=.*[a-z]) requires at least one lowercase letter.
    (?=.*\d) requires at least one digit.
    (?=.*[@!?*$.+-]) requires at least one special character from the specified set (@!?*$.+-).
    [A-Za-z\d@!?*$.+-]{6,20} matches between 6 and 20 characters from the specified character set.
    $ asserts the end of the string.*/
    $PATTERN = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@!?*$.+-])[A-Za-z\d@!?*$.+-]{6,20}$/';

    if (preg_match($PATTERN, $pass)) {
        $hashed = password_hash($pass, PASSWORD_BCRYPT);
        // Password is valid, proceed with further processing
        // ...
    } else {
        // Password does not meet the requirements
        // Handle validation failure
        echo "Password does not meet requirements.";
    }
} else {
    //header('location:../insc.php');
    var_dump($_POST['userPassword']);
    var_dump($_POST['userPasswordConf']);
    exit();
}


if (!empty($_POST) && !empty($hashed) && !empty($usname) && !empty($mail)) {
    try {
        require_once './bdd.php';
        $req = $pdo->prepare("INSERT INTO useraccounts(userNickname, userPassword, conftoken, userEmail) VALUES (:userNickname, :userPassword, :conftoken, :userEmail)");
        $tok = token(60);
        $req->bindParam(':userNickname', $usname);
        $req->bindParam(':userPassword', $hashed);
        $req->bindParam(':conftoken', $tok);
        $req->bindParam(':userEmail', $mail);
        $req->execute();
    } catch (PDOException $e) {
        echo "Erreur : " . $e;
    } finally {
        $usid = $pdo->lastInsertId();
        $pdo = null;
        header("location:./confirm.php?id=" . $usid . "&token=" . $tok);
        exit();
    }
} else {
    //header("location:../insc.php");
    exit();
}
