<?php
session_start();
ob_start();
echo "<h1>Logout</h1>";
$email=$_SESSION['email'];
echo "case1 =$email<br/>";
unset($_SESSION['email']);
header("Location:login.php");
?>

