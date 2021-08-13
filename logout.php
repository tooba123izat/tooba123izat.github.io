<?php
session_start();

unset($_SESSION['loggedin']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['email']);
unset($_SESSION['address']);
unset($_SESSION['mnum']);
unset($_SESSION['total']);
unset($_SESSION['cart']);
unset($_SESSION['count']);		




header("Location:login1.php");
?>