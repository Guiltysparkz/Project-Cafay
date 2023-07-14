<?php
require "./adminbase.php";

// Spécifier la location du fichier texte pour archiver les erreures
$logFile = __DIR__ . '/error_log.txt';

// Traitement du formulaire d'inscription
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userNickname = $_POST["userNickname"];
    $userPassword = $_POST["userPassword"];
    $userEmail = $_POST["userEmail"];

    try {
        // Vérification si l'utilisateur existe déjà
        $checkQuery = "SELECT * FROM useraccounts WHERE userNickname = :userNickname";
        $checkStatement = $conn->prepare($checkQuery);
        $checkStatement->bindParam(':userNickname', $userNickname);
        $checkStatement->execute();

        if ($checkStatement->rowCount() > 0) {
            echo "Nom d'utilisateur déjà utilisé. Veuillez en choisir un autre.";
        } else {
            // Insertion des données dans la base de données avec date
            $insertQuery = "INSERT INTO useraccounts (userNickname, userPassword, userEmail, created_at) VALUES (:userNickname, :userPassword, :userEmail, NOW())";
            $insertStatement = $conn->prepare($insertQuery);
            $insertStatement->bindParam(':userNickname', $userNickname);
            $insertStatement->bindParam(':userPassword', $userPassword);
            $insertStatement->bindParam(':userEmail', $userEmail);

            if ($insertStatement->execute()) {
                header("location: succes.php");
                echo "Inscription réussie !";
            } else {
                // Envoie de l'erreur vers error_log.txt
                $errorMessage = "Erreur lors de l'inscription : " . $e->getMessage();
                error_log($errorMessage, 3, $logFile);

                // Insertion de l'erreur dans la base avec la date
                $errorTimestamp = date("Y-m-d H:i:s");
                $errorData = [
                    'timestamp' => $errorTimestamp,
                    'message' => $errorMessage
                ];
                $errorSql = "INSERT INTO error_logs (timestamp, message) VALUES (:timestamp, :message)";
                $errorStatement = $conn->prepare($errorSql);
                $errorStatement->execute($errorData);

                // Affichage d'un message d'erreur lamdba pour l'utilisateur
                echo "Une erreur est survenue lors du traitement de votre demande. Veuillez réessayer ultérieurement.";
            }
        }
        // S'il y a une erreur dans la requete on log l'erreur
    } catch (PDOException $e) {
        // Envoie de l'erreur vers error_log.txt
        $errorMessage = "Erreur lors de l'inscription : " . $e->getMessage();
        error_log($errorMessage, 3, $logFile);

        // Insertion de l'erreur dans la base avec la date
        $errorTimestamp = date("Y-m-d H:i:s");
        $errorData = [
            'timestamp' => $errorTimestamp,
            'message' => $errorMessage
        ];
        $errorSql = "INSERT INTO error_logs (timestamp, message) VALUES (:timestamp, :message)";
        $errorStatement = $conn->prepare($errorSql);
        $errorStatement->execute($errorData);

        // Affichage d'un message d'erreur lamdba pour l'utilisateur
        echo "Une erreur est survenue lors du traitement de votre demande. Veuillez réessayer ultérieurement.";
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
$conn = null;
?>
