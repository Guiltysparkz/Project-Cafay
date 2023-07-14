<?php
// Start or resume the session
session_start();

// Vérifier si le formulaire d'inscription est soumis
if (isset($_POST['submit'])) {
    // Récupérer les données du formulaire
    $userSurname = $_POST['userSurname'];
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userPassword = password_hash($_POST['userPassword'], PASSWORD_DEFAULT);

    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cafaydb";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête d'insertion des données dans la table "useraccounts"
        $sql = "INSERT INTO useraccounts (userSurname, userName, userEmail, userPassword) VALUES (:userSurname, :userName, :userEmail, :userPassword)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':userSurname', $userSurname);
        $stmt->bindParam(':userName', $userName);
        $stmt->bindParam(':userEmail', $userEmail);
        $stmt->bindParam(':userPassword', $userPassword);

        $stmt->execute();

        // Store success message in session variable
        $_SESSION['flash']['success'] = "Inscription réussie !";

        // Clean the output buffer
        ob_clean();

        // Redirection vers la page d'accueil avec le nom de l'utilisateur
        header("Location: page_acc.php?userName=$userName");
        exit();
    } catch (PDOException $e) {
        // Store error message in session variable
        $_SESSION['flash']['error'] = "Erreur lors de l'inscription : " . $e->getMessage();

        // Clean the output buffer
        ob_clean();

        // Redirection vers la page d'accueil
        header("Location: inscription.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <?php
    // Display error message if it exists in session
    if (isset($_SESSION['flash']['error'])) {
        echo "<p>{$_SESSION['flash']['error']}</p>";
        unset($_SESSION['flash']['error']);
    }
    ?>
    <form action="inscription.php" method="POST">
        <label for="userSurname">Nom :</label>
        <input type="text" id="userSurname" name="userSurname" required><br>

        <label for="userName">Prénom :</label>
        <input type="text" id="userName" name="userName" required><br>

        <label for="userEmail">Email :</label>
        <input type="email" id="userEmail" name="userEmail" required><br>

        <label for="userPassword">Mot de passe :</label>
        <input type="password" id="userPassword" name="userPassword" required><br>

        <input type="submit" name="submit" value="Inscription">
    </form>
</body>
</html>
