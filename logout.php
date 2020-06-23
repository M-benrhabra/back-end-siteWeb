<?php session_start() ?>

<?php 
    $_SESSION['id'] = null;
    $_SESSION['username'] = null;

    header('Location: index.php');
?>