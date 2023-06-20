
<?php
require"./adminbase.php";

// Traitement du formulaire d'inscription
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userNickname = $_POST["userNickname"];
    $userPassword = $_POST["userPassword"];
    $userEmail = $_POST["userEmail"];

    // Vérification si l'utilisateur existe déjà
    $checkQuery = "SELECT * FROM useraccounts WHERE userNickname = '$userNickname'";
    $result = $conn->query($checkQuery);
    if ($result->num_rows > 0) {
        echo "Nom d'utilisateur déjà utilisé. Veuillez en choisir un autre.";
    } else {
        // Insertion des données dans la base de données
        $insertQuery = "INSERT INTO useraccounts (userNickname, userPassword, userEmail, created_at) VALUES ('$userNickname', '$userPassword', '$userEmail', NOW())";
        if ($conn->query($insertQuery) === TRUE) {
            header("location: succes.php");
            echo "Inscription réussie !";
        } else {
            echo "Erreur lors de l'inscription : " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <h2>Inscription</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="userNickname">Nom d'utilisateur:</label>
        <input type="text" name="userNickname" required><br><br>
        <label for="userPassword">Mot de passe:</label>
        <input type="password" name="userPassword" required><br><br>
        <label for="userEmail">Email:</label>
        <input type="email" name="userEmail" required><br><br>
        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>

<?php
// Fermeture de la connexion à la base de données
$conn->close();
?>