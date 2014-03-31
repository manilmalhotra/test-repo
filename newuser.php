<?php
ob_start();
require("connection.php");

if(isset($_POST['email']))
	{$email=$_POST['email'];
	$password=$_POST['password'];
	$rnum=rand();
	$rnum *=$rnum;
	$str="insert into user(email,password,active_code)  values('$email','$password',$rnum)";
	$query=mysql_query($str);
	$id=mysql_insert_id();
	if($query)
	{
	echo "saved";
	$url1="active.php?id=$id&act=$rnum";
	$link="localhost/php9-11/day41/active.php?id=$id&act=$rnum";
	$url="<a href='$url1'>$link</a>";
	echo "$url";
	//header("Location:insert.php");
	}
	else
	{
	echo "error<br/>$str";
	}
}
else
{
echo"
<form action='newuser.php' method='post'>
<table>
<tr><td>Email</td><td><input type='text' name='email'/></td></tr>
<tr><td>password</td><td><input type='password' name='password'/></td></tr>
<tr><td colspan=2><input type='submit' value='save'/></td></tr>

</table>

</form>


";

}









?>