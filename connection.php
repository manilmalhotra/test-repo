<?php

define("SERVER","localhost");
define("USERID","root");
define("PASSWORD","");
define("DATABASE","emp");

$con=mysql_connect(SERVER,USERID,PASSWORD);
if($con)
{
//echo "server connected";
	$my_database=mysql_select_db(DATABASE);
	if($my_database)
	{
	//echo "database connected";
	
	}
	else
	{
	echo "database connection error";
	}

}
else
{
echo "server connection error";
}

?>