<?php
// Vérifier si le formulaire d'inscription est soumis
if (isset($_POST['submit'])) {
    // Récupérer les données du formulaire
    $nom = $_POST['userSurname'];
    $prenom = $_POST['userName'];
    $email = $_POST['email'];
    $motdepasse = password_hash($_POST['userPassword'], PASSWORD_DEFAULT);

    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cafaydb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Requête d'insertion des données dans la table "utilisateurs"
    $sql = "INSERT INTO useraccounts (userSurname, userName, userEmail, userPassword) VALUES ('$userSurname', '$userName', '$userEmail', '$userPassword')";

    if ($conn->query($sql) === TRUE) {
        // Redirection vers la page d'accueil avec le nom de l'utilisateur
        header("Location: page_acc.php?nom=$nom");
        exit();
    } else {
        echo "Erreur lors de l'inscription : " . $conn->error;
    }

    // Fermeture de la connexion à la base de données
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
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