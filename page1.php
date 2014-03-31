<?php session_start();
ob_start();
if(isset($_SESSION['email']))
{

echo "<h1>page 1</h1>";
$my_email=$_SESSION['email'];
echo "email=$my_email";
include("menu.php");


}
else
{
header("Location:login.php");
}
?>

