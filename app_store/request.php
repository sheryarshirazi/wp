<?php
session_start();
include('config.inc.php');
if(isset ($_POST['btnsubmit']))
{
	$uname= $_POST['uname'];
	$pass= $_POST['upass'];
	
	$query="SELECT count(*) FROM user WHERE user_name='$uname' and user_pass='$pass'";
	$index=mysql_query($query);
	$user=mysql_fetch_row($index);
	if($user[0]==1){
          $_SESSION['loginUser']=$uname;
          $query="SELECT user_role FROM user WHERE user_name='$uname' and user_pass='$pass'";
	      $index=mysql_query($query);
	      $user=mysql_fetch_row($index);
          $_SESSION['user_role']=$user['0'];
          
	}
}//if 1

//header("Location: index.php");
?>