<?php

   $db_name = 'mysql:host=localhost;dbname=activigo';
   $db_user_name = 'root';
   $db_user_pass = '';
   
   session_start();
   $bdd = new PDO($db_name, $db_user_name, $db_user_pass);
   $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>
