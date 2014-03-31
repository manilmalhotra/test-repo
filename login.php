<?php
session_start();
ob_start();
if(isset($_POST['email']))
{


$db_email="spic@gmail.com";
$db_password="spic";
$email=$_POST['email'];
$password=$_POST['password'];
$_SESSION['email']=$email;

$email1=$_SESSION['email'];

echo "email1=$email1";
header("Location:page1.php");
/*
if($db_email==$email)
{
if($db_password==$password){header("Location:page1.php?email=$email");}else{echo "password miss match error";}
}
else
{
echo "user not found";
}
*/




}

else
{



echo"
<form action='login.php' method='post'>
<table>
<tr><td>Email</td><td><input type='text' name='email'/></td></tr>
<tr><td>password</td><td><input type='password' name='password'/></td></tr>
<tr><td colspan=2><input type='submit' value='save'/></td></tr>

</table>

</form>


";

}

?>