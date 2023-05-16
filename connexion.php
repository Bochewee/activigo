<?php
session_start();

if (isset($_POST['submit'])) {
    // Connexion à la base de données
    $db = new PDO('mysql:host=localhost;dbname=activigo', 'root', '');

    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];

    // Vérification des identifiants
    $stmt = $db->prepare('SELECT id, password FROM utilisateurs WHERE pseudo = :pseudo');
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
</head>
<body>
<?php if ($error): ?>
<p style="color: red;"><?php echo $error; ?></p>
<?php endif; ?>
<form action="connexion.php" method="post">
    <input type="text" name="pseudo" placeholder="Pseudo" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <button type="submit" name="submit">Se connecter</button>
</form>
<p>Pas de compte? <a href="inscription.php">Inscrivez-vous</a></p>
<p><a href="index.php">Retourner au site</a></p>
</body>
</html>
