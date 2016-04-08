<?php 

$fName=$_POST['ufName'];
$lName=$_POST['ulName'];
$userName=$_POST['nUserName'];
$userPass=$_POST['nUserPass1'];
$userGender=$_POST['nUserGender'];
$userEmail=$_POST['nUserEmail'];
$userDOB=$_POST['nUserDOB'];
include('config.inc.php');
$query="select user_email from user where user_name='".$userName."'";
$indexUN=mysql_query($query);
$query="select user_name from user where user_email='$userEmail'";
$indexUE=mysql_query($query);



  if (mysql_fetch_assoc($indexUN) != 0)
  {
     //echo "Username already exists";
	 
	 //
	 echo '<script language="javascript">';
	 echo 'alert("username already exists")';
	 echo '</script>';
	 echo '<a href="register.php">register please </a>';
	 //sleep(20);
	 //header("Location: register.php");
	 
  }
  else if(mysql_fetch_assoc($indexUE) != 0)
  {
	//echo "email is already exists";
	// sleep(20);
	// 
	echo '<script language="javascript">';
	echo 'alert("email already exists")';
	echo '</script>';
	echo '<a href="register.php">register please </a>';
  }
  else{
    $query="insert into user(user_fname,user_lname,user_name,user_pass,user_gender,
	user_email,user_dob) 
	values('$fName','$lName','$userName','$userPass','$userGender','$userEmail','$userDOB')"; 
	
	mysql_query($query) or mysql_error(); 
	mysql_close();
	echo "successfully submited!<br />please wait some time until admin authorized you  ";
	echo '<a href="myaccount.php">login</a>';
	
  }
  
  



 
?>