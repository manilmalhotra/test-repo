<?php
session_start();
ob_start();
$id=session_id();
echo "id=$id";
if(isset($_SESSION['email']))
{
echo "<h1>page 2</h1>";
include("menu.php");
}
else
{
header("Location:login.php");
}
?>

