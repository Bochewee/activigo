<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=activigo;charset=utf8', 'root', '');

if (!isset($_SESSION['id'])) {
    header('Location: index.php');
    exit;
}

$user_id = $_SESSION['id'];

if (isset($_POST['submit'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $mdp = $_POST['mdp']; 
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $date_naissance = isset($_POST['date_naissance']) ? htmlspecialchars($_POST['date_naissance']) : '';
    
    if(!empty($_POST['mdp'])) {
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
    }
    
    $updateSql = "UPDATE utilisateurs SET nom = :nom, prenom = :prenom, email = :email, pseudo = :pseudo, adresse = :adresse, date_naissance = :date_naissance" . ($mdp != '' ? ', mdp = :mdp' : '') . " WHERE id = :user_id";
    $updateUser = $bdd->prepare($updateSql);
    $updateParams = array(
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':email' => $email,
        ':pseudo' => $pseudo,
        ':adresse' => $adresse,
        ':date_naissance' => $date_naissance,
        ':user_id' => $user_id
    );
    
    if ($mdp != '') {
        $updateParams[':mdp'] = $mdp;
    }
    
    $updateUser->execute($updateParams);
    
}

$userInfo = $bdd->prepare("SELECT * FROM utilisateurs WHERE id = ?");
$userInfo->execute(array($user_id));
$user = $userInfo->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modifier mon compte</title>
    <link rel="stylesheet" href="style.css">
<style>
body {
    font-family : "Montserrat", sans-serif ;

}
h1 {
    background-color : black ; 
    height : 60px ; 
    color : green ; 
    text-align : center ; 
    margin-top : -20px ; 
    padding : 20px ; 
    margin-left : -20px ;
    border-bottom : 2px solid green ; 
    box-shadow : 0 0 5px green ; 
    position : sticky ; 
    display : block  ; 
}
input {
    background-color : green ; 
    color : white ; 
    border : 2px solid green ; 
    gap : 10px ; 
    border-radius : 5px ; 
    margin-bottom : 10px ; 
    padding : 20px ; 
    text-align : center ; 
    display : block ; 
}
input[type="submit"] {
    margin : 0 auto ; 
    margin-bottom : 20px ; 
}
input[type="submit"]:hover {
    background-color : green ; 
    color : black ; 
}
a:hover {
    background-color : green ; 
    color : black ; 
}
.container {
    text-align : center ;
    border : 2px solid green ; 
    box-shadow : 0 0 5px green ; 
    display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: auto ;
  padding : 20px ; 
}
a {
    text-decoration : none ; 
    color : white ; 
    background-color : black ; 
    border : 2px solid green ; 
    box-shadow : 0 0 5px green ; 
    padding : 20px ; 
}
</style>
</head>
<body>
<h1>Modifier mon compte</h1>
    <div class="container">
        <form method="post" action="">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" value="<?= $user['nom'] ?>" required>
            <br>
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" value="<?= $user['prenom'] ?>" required>
            <br>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" value="<?= $user['email'] ?>" required>
            <br>
            <label for="mdp">Mot de passe :</label>
            <input type="password" name="mdp" id="mdp" placeholder="Laissez vide si pas de modif" autocomplete="off">
            <br>
            <label for="pseudo">Pseudo :</label>
            <input type="text" name="pseudo" id="pseudo" value="<?= $user['pseudo'] ?>" required>
            <br>
            <label for="adresse">Adresse :</label>
            <input type="text" name="adresse" id="adresse" value="<?= $user['adresse'] ?>" required>
            <br>
            <label for="date_naissance">Date de naissance :</label>
            <input type="date" name="date_naissance" id="date_naissance" value="<?= isset($user['date_naissance']) ? $user['date_naissance'] : '' ?>" required>
            <br>
            <input type="submit" name="submit" value="Mettre à jour">
        </form>
        <a href="index.php">Retourner sur le site</a>
    </div>
</body>
</html>
