<?php
session_start();

if (isset($_POST['submit'])) {
    // Connexion à la base de données
    $db = new PDO('mysql:host=localhost;dbname=activigo', 'root', '');

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $pseudo = $_POST['pseudo'];
    $adresse = $_POST['adresse'];
    $date_naissance = $_POST['date_naissance'];

// Vérifier si le pseudo existe déjà
$stmt = $db->prepare("SELECT * FROM utilisateurs WHERE pseudo = :pseudo");
$stmt->execute([':pseudo' => $pseudo]);
if ($stmt->rowCount() > 0) {
    $_SESSION['error'] = "Erreur : ce pseudo existe déjà";
    header('Location: inscription.php');
    exit();
}

// Vérifier si l'email existe déjà
$stmt = $db->prepare("SELECT * FROM utilisateurs WHERE email = :email");
$stmt->execute([':email' => $email]);
if ($stmt->rowCount() > 0) {
    $_SESSION['error'] = "Erreur : cet email est déjà utilisé";
    header('Location: inscription.php');
    exit();
}

    
    // Vérifier si l'utilisateur a plus de 18 ans
    $date_naissance = new DateTime($_POST['date_naissance']);
    $today = new DateTime();
    $age = $today->diff($date_naissance)->y;
    
    // Format the date of birth to string before inserting into the database
    $date_naissance = $date_naissance->format('Y-m-d');
    
    if ($age < 18) {
        $_SESSION['error'] = "Erreur : vous devez avoir au moins 18 ans pour vous inscrire";
        header('Location: inscription.php');
        exit();
    }
    
    // Then the insert statement
    $stmt = $db->prepare("INSERT INTO utilisateurs (nom, prenom, email, password, pseudo, adresse, date_naissance) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$nom, $prenom, $email, $password, $pseudo, $adresse, $date_naissance]);
    

    $_SESSION['message'] = "Inscription réussie !";
    header('Location: connexion.php');
    exit();
}

$error = $_SESSION['error'] ?? '';
$message = $_SESSION['message'] ?? '';

// Effacer les messages de la session
unset($_SESSION['error'], $_SESSION['message']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php if ($error): ?>
<p style="color: red;"><?php echo $error; ?></p>
<?php endif; ?>

<?php if ($message): ?>
<p style="color: green;"><?php echo $message; ?></p>
<?php endif; ?>
<form action="inscription.php" method="post">
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="text" name="prenom" placeholder="Prénom" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <input type="text" name="pseudo" placeholder="Pseudo" required>
    <input type="text" name="adresse" placeholder="Adresse" required>
    <input type="date" name="date_naissance" required>
    <button type="submit" name="submit">S'inscrire</button>
</form>
<p>Déjà un compte? <a href="connexion.php">Connectez-vous</a></p>
<p><a href="index.php">Retourner au site</a></p>
</body>
</html>