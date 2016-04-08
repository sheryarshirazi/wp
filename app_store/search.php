<?php 
	$name=$_POST['appSearch'];
	echo $name;
	include('config.inc.php');
	$query="SELECT app_id from apps where app_name like '%".$name."%'";
	$index=mysql_query($query) or mysql_error();
	$apps=mysql_fetch_assoc($index);
	if($apps!=""){
		$path="location: details.php?id=".$apps['app_id'];
		header($path);	
	}else
?>