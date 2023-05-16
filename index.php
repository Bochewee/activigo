<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=activigo;charset=utf8', 'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ActiviGo</title>
<style>
.posts-container {
    margin: 0 auto; 
    padding: 20px;
}
.navbar {
    height: 80px ;
    background-color: black ;
    margin: 0 auto;
    padding: 20px;
    align-items: center;
    display: flex;
    position: sticky;
    left:0px;
    right:0px;
    top:0px;
    border-bottom : 2px solid #008E00 ;
    box-shadow : 0px 0px 10px 0px #008E00 ;
    opacity: 90%;
}

h1 {
    text-align: center;
    margin-bottom: 25px;
    color : #008E00 ;
    font-weight : 200 ; 
    margin-right : 65% ; 
}

.buttons {
    display: flex;
    justify-content: center;
    gap: 20px ; 

}
.navbar a {
    text-decoration: none;
    color: white ;
    background-color: black;
    padding : 10px 20px ;
    border-radius: 5px;
    border : 1px solid #008E00 ;
}

.posts-container a {
    text-decoration: none;
    color: white ;
    background-color: black;
    margin : 40px ; 
    padding : 10px 20px ;
    border-radius: 5px;
    border : 1px solid #008E00 ;

}
a:hover {
    background-color: #008E00;
    color : black ;
    transition: 0.2s;
}

.overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
}
ul {
    list-style: none;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    justify-content: center;
    gap: 30px;
    margin-right : 5% ;
    
}

li {
    margin-top: 15px;
    border : 2px solid #008E00 ;
    border-radius: 10px;
    padding: 10px 15px;
    color : #008E00 ;

}
.popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: black;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px #008E00 ;
    z-index: 11;
}

.popup h3 {
    margin: 0 0 20px 0;
    text-align: center;
    color : #008E00 ;
}

.popup a {
    text-decoration: none;
    color: white ;
    background-color: black;
    padding : 10px 20px ;
    border-radius: 5px;
    border : 1px solid #008E00 ;
    margin-right : 20px ;
}
.popup a:hover {
    background-color: #008E00;
    color : black ; 
    transition: 0.2s;
}
.noimg {
    width: 80%;
    max-height: 100px;
    background-color: black ;
    border : 2px solid #008E00 ;
    border-radius: 5px;
    text-align: center;
    padding-block : 50px ;
    display : flex ; 
    justify-content : center ;
}
</style>
</head>
<body>
    <div class="navbar">
        <h1>ActiviGo</h1>
        <div class="buttons">
            <?php if (isset($_SESSION['id'])): ?>
                <a href="mon_compte.php">Mon compte</a>
                <a href="deconnexion.php">Se déconnecter</a>
            <?php else: ?>
                <a href="#" onclick="showPopup()">Se connecter</a>
                <a href="#" onclick="showSignupPopup()">S'inscrire</a>
            <?php endif; ?>
        </div>
    </div>

    <div class="overlay" onclick="hidePopup()"></div>
    <div class="popup">
        <h3>Se connecter en tant que :</h3>
        <a href="../entreprise/agents/connexion.php">Professionnel</a>
        <a href="connexion.php">Utilisateur</a>
    </div>

    <div class="overlay signup-overlay" onclick="hidePopup()"></div>
    <div class="popup signup-popup">
        <h3>S'inscrire en tant que :</h3>
        <a href="../entreprise/agents/inscription.php">Professionnel</a>
        <a href="inscription.php">Utilisateur</a>
    </div>
<!-- Voir les annonces -->


<!-- JS -->
    <script>
        function showPopup() {
            document.querySelector(".overlay").style.display = "block";
            document.querySelector(".popup").style.display = "block";
        }

        function showSignupPopup() {
            document.querySelector(".signup-overlay").style.display = "block";
            document.querySelector(".signup-popup").style.display = "block";
        }

        function hidePopup() {
            document.querySelector(".overlay").style.display = "none";
            document.querySelector(".popup").style.display = "none";
            document.querySelector(".signup-overlay").style.display = "none";
            document.querySelector(".signup-popup").style.display = "none";
        }
    </script>
</body>
</html>
