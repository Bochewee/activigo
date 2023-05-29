<div class="navbar">
        <h1><a href="home.php">ActiviGo</a></h1>
        <div class="buttons">
            <?php if (isset($_SESSION['id'])):?>
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