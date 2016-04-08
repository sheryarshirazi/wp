<?php
	include('config.inc.php');
	
	if(!empty($_GET['id'])){
		$id=$_GET['id'];
		$query="DELETE FROM apps WHERE app_id=".$id;
		echo "deleted seccesfully";
	}
	if(!empty($_GET['uId'])){
		$uId=$_GET['uId'];
		$query="DELETE FROM user WHERE user_id=".$uId;
		echo "deleted seccesfully";
	}
		
		
		mysql_query($query) or mysql_error();
		
	echo "<br /><a href='adminpanel.php'>delete more</a>";
	mysql_close();
?>