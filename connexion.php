<?php
include "components/connect.php";


if (isset($_POST['submit'])) {
    // Connexion à la base de données
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];

    // Vérification des identifiants
    $stmt = $bdd->prepare('SELECT id, password FROM utilisateurs WHERE pseudo = :pseudo');
    $stmt->execute([':pseudo' => $pseudo]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$result || !password_verify($password, $result['password'])) {
        $_SESSION['error'] = 'Mauvais identifiant ou mot de passe !';
    } else {
        $_SESSION['id'] = $result['id'];
        $_SESSION['pseudo'] = $pseudo;
        header('Location: index.php');
        exit();
    }
}

$error = $_SESSION['error'] ?? '';
unset($_SESSION['error']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/user_style.css">
</head>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <section class='form'>
    <div class="form-container">
        <form action="connexion.php" method="post">
            <input type="text" name="pseudo" placeholder="Pseudo" required autocomplete='off' >
            <br>
            <input type="password" name="password" placeholder="Mot de passe" required autocomplete='off' >
            <br>
            <button type="submit" name="submit">Se connecter</button>
        </form>
        <p>Pas de compte? <a href="inscription.php">Inscrivez-vous</a></p>
        <p><a href="home.php">Retourner au site</a></p>
    </div>
    </section>
</body>
</html>

</html>
