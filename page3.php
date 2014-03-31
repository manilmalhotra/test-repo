<?php
session_start();
ob_start();
if(isset($_SESSION['email']))
{
echo"<h1>page 3</h1>";

$email=$_SESSION['email'];

echo "email=$email";
include("menu.php");
}
else
{
header("Location:login.php");
}
?>

