<?php
	session_start();
	if( !isset($_SESSION['user_role']) || ($_SESSION['user_role']>20) ){
		header("Location: myaccount.php");
	}

	$uView=0;
	if(!empty($_GET['uId'])){
		$uId=$_GET['uId'];
		$uView=1;
		include('config.inc.php');
		$uQuery="SELECT * FROM user where user_id=".$uId;
		$uIndex=mysql_query($uQuery) or mysql_error();
		$user=mysql_fetch_assoc($uIndex);	
	}

	if($uView==1){
	echo "
		<form method='post' action='saveUpdateUser.inc.php?uId=".$user['user_id']."'>
		<table border=3px solid black>
			<tr><th colspan =2>USER INFO</th></tr>
			<tr><th colspan =2> ID=".$user['user_id']."</th></tr>
			<tr><td>user name</td><td>".$user['user_name']."</td></tr>
			<tr><td/>user role</td><td>
			<input type='number' name='userRole' value='".$user['user_role']."'/></td></tr>
			<tr><td colspan =2 align='center'><input type='submit' name='btnSubUser' value='update' /></td></tr>
		</table>
		</form>
	";
	}
	mysql_close();
?>