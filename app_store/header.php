<?php 
	session_start();
	$num2=0;
	
	if(isset($_SESSION['loginUser']))
	{
		if($_SESSION['loginUser']!="")
		{
			$num2=1;
		}//if
	}//if
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
	<title>Apps Store</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrap">

		<div style="height:20px;background:url(images/center_bg.gif) repeat-y center;font-size:1.4em;">
        
		<?php
		if($num2!=1)
		{
			echo '
			<label style="float:right;margin-right:10px;"><a href="register.php">Register</a></label>
			<label style="float:right;margin-right:10px"><a href="myaccount.php">Sign In</a></label>';
		}
		else
		{    if($_SESSION['user_role']>0 && $_SESSION['user_role']<21){
				echo '
			   <label style="float:right;margin-right:10px;"> Welcome Admin'.$_SESSION['loginUser'].'</label>
        	   <label style="float:right;margin-right:10px"><a href="logout.php">Sign Out</a></label>';
             }//if
             else{
			    echo'
                <label style="float:right;margin-right:10px;"> Welcome '.$_SESSION['loginUser'].'</label>
        	    <label style="float:right;margin-right:10px"><a href="logout.php">Sign Out</a></label>';
             }//else
		}
		?>
</div><!--wrap-->
       
       
       <div class="header"> <br/><br/> 
<br/>       		<div class="logo"></div><!--logo-->           
            
            <div id="menu">
                <ul>                                                                       
                    <li><a href="index.php">home</a></li>
                    <li><a href="ab.php">about us</a></li>
                    <li><a href="category.php">Apps</a></li>
                    <!--
                    <li><a href="details.php">download/cart</a></li>-->
                    <li><a href="contact.php">contact</a></li>
              </ul>
            </div><!--menu-->     
        </div><!--header--> 
       	