<?php 
	session_start();
	unset($_SESSION['loginUser']);
	unset($_SESSION['user_role']);
	header("Location: index.php");
?>