<?php include "components/variables.php";
include "components/connect.php";

if(isset($_COOKIE['user_id'])){
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}
define("TITLE","Contact Us | $companyName");?>
<!-- head section  -->
<?php include "components/user_head.php" ?>
<body>
    <!-- header section starts -->
    <?php include 'components/user_header.php'?>
    <!-- header section ends -->
    <!-- contact form start -->
    <?php include 'components/contact_form.php'?>
    <!-- contact form end -->
    <!-- footer section starts  -->
<?php include 'components/footer.php'?>
<!-- footer section end  -->