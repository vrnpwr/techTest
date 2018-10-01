<?php session_start();
    unset($_SESSION['a_email']);
    echo "<script>window.location.assign('login.php?x=logout')</script>";
?>