<?php 
	$host='localhost';
	$user='root';
	$pass ='';
	$db='androidapp';
	$con=mysql_connect($host,$user,$pass );
	if(!$con)
	{
		echo "Error. Unable to Connect to server.";
	}
	else
	{
		$database = mysql_select_db($db,$con);
		if(!$database)
		{
			echo "Error. Unable to Connect to Database.";
		}
	}
	
	
?>