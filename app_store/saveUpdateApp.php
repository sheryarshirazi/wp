<?php
	session_start();
	if( !isset($_SESSION['user_role']) || ($_SESSION['user_role']>20) ){
		header("Location: myaccount.php");
	}
	//for send query of updated data
	if(isset($_POST['btnSubApp'])){
		$aName=$_POST['aName'];
		$aDesc=$_POST['aDesc'];
		$aMoreDesc=$_POST['aMoreDesc'];
		$aImg=$_POST['aImg'];
		$aScreen=$_POST['aScreen'];
		$aLink=$_POST['aLink'];
		$aCat=$_POST['aCat'];
		$aId=$_GET['aId'];
		include('config.inc.php');
		$updateQ="UPDATE androidapp.apps SET app_name='".$aName."',app_desc='".$aDesc."',
		more_desc='".$aMoreDesc."',app_img='".$aImg."',app_screen='".$aScreen."',app_link='".$aLink."',
		app_cat='".$aCat."' where apps.app_id=".$aId;
		echo $updateQ;
		mysql_query($updateQ) or die('query not working');
		echo "update succesfully";
		echo "<a href='adminpanel.php'> update more</a>";
	}//if

 ?>