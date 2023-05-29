<?php include "components/variables.php";
include "components/connect.php";

if(isset($_COOKIE['user_id'])){
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}
define("TITLE","Home | $companyName");?>
<!-- head section  -->
<?php include "components/user_head.php" ?>
<body>
    <!-- header section starts -->
    <?php include 'components/user_header.php'?>
    <!-- header section ends -->
    
<!-- Voir les annonces -->
<img id='homeImg'src="img/homeImg" alt="home image">
<!-- footer section starts  -->
<?php include 'components/footer.php'?>
<!-- footer section ends  -->

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
