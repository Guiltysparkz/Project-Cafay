<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!empty($_POST['userPassword'])) {
    function cleandata($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $userEmail = cleandata($_POST['userEmail']);
} else {
    echo 'probleme';
}

// Define $userdata and $userID variables outside the try block
$userdata = null;
$userID = null;

//preg_match logic is such:
/*^ asserts the start of the string.
    (?=.*[A-Z]) requires at least one uppercase letter.
    (?=.*[a-z]) requires at least one lowercase letter.
    (?=.*\d) requires at least one digit.
    (?=.*[@!?*$.+-]) requires at least one special character from the specified set (@!?*$.+-).
    [A-Za-z\d@!?*$.+-]{6,20} matches between 6 and 20 characters from the specified character set.
    $ asserts the end of the string.*/

if (!empty($_POST['userPassword'])
    && preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@!?*$.+-])[A-Za-z\d@!?*$.+-]{6,20}$/', $_POST['userPassword'])
    && !empty($userEmail)
) {
    try {
        require_once './connect.php';
        $req = $pdo->prepare('SELECT * FROM useraccounts WHERE tokenconfirmed IS NOT NULL AND userEmail = :userEmail ');
        $req->bindParam(':userEmail', $userEmail);
        $req->execute();
        $userdata = $req->fetch(PDO::FETCH_OBJ);
        
        if (!empty($userdata) && password_verify($_POST['userPassword'], $userdata->userPassword)) {
            $userID = $userdata->userID; // Retrieve the userID from the fetched data
        }
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e;
    } finally {
        if (!empty($userID)) {
            session_start();
            $_SESSION['auth'] = $userdata;
            print_r($_SESSION['auth']);
            header('Location: ../Cafay-Boutique-shop.php?userID=' . urlencode($userID));
            exit; // Make sure to exit after the header redirection
        } else {
            echo 'c\'est pas bon du';
            var_dump(password_verify($_POST['userPassword'], $userdata->userPassword));
            echo "userdata:  ";
            var_dump($userdata);
            // Redirect back to the login page with an error message or perform other actions
        }
    }
} else {
    echo 'sa ne fonctionne pas';
}

