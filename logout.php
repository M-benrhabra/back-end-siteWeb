<?php 

session_start();
 $_SESSION['username'] = null;
     $_SESSION['msg'] = "you nust log in first to view this page";
     header('location: login.php');



?>