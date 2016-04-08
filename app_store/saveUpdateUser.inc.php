<?php 
	session_start();
	if( !isset($_SESSION['user_role']) || ($_SESSION['user_role']>20) ){
		header("Location: myaccount.php");
	}
	if(isset($_POST['btnSubUser'])){
		$userRole=$_POST['userRole'];
		$uId=$_GET['uId'];
		//echo $userRole;
		include('config.inc.php');
		$uQuery="UPDATE androidapp.user SET user_role=".$userRole. " where user_id=".$uId;
		mysql_query($uQuery) or mysql_error();
		echo "updated successfuly <a href='adminpanel.php'>update more</a>";	
		
	}//if

?>