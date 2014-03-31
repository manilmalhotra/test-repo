<?php
error_reporting(0);
ob_start();
$id=$_REQUEST['id'];
$active_code=$_REQUEST['act'];
require("connection.php");
$sql="update user set status=1 where id=$id and active_code=$active_code";
//echo $sql;
$query=mysql_query($sql);
$num=mysql_affected_rows();
//echo "[$num]";
if($num>0)
{
header("Location:profile.php");
}
else
{
echo "user not found";
}
?>////////////