<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['uname']);
unset($_SESSION['unam']);
header('Location:index.php');
die();
?>