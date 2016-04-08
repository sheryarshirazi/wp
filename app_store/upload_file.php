<?php 
		session_start();
		if( !isset($_SESSION['user_role']) || ($_SESSION['user_role']>20) ){
			header("Location: myaccount.php");
		}
		
		if(isset($_POST['btnSubmit'])){
			$appName=$_POST['txtApName'];
			$appDesc=$_POST['txtDesc'];
			$moreDetail=$_POST['txtmoreDetail'];
			$appCat=$_POST['aCat'];
			
			/*for image and file */
			if($_FILES["ifile"]["error"]>0 && $_FILES["afile"]["error"]>0 && $_FILES["sfile"]["error"]>0 ){
				echo "ERROR: ". $_FILES["ifile"]["error"]."<br>";
				echo "ERROR: ". $_FILES["afile"]["error"]."<br>";
				echo "ERROR: ". $_FILES["sfile"]["error"]."<br>";
			}//if
			else{
				
				
				
				//image
				if(file_exists("appsimage/".$_FILES["ifile"]["name"]) || file_exists("apps/".$_FILES["afile"]["name"]) || file_exists("appsimage/".$_FILES["sfile"]["name"]) ){
					echo $_FILES['ifile']['name']." or ".$_FILES['afile']['name'].$_FILES["sfile"]["name"].
					" already exists";
				}//if
				else{
					move_uploaded_file($_FILES["sfile"]["tmp_name"],"appsimage/".$_FILES["sfile"]["name"]);
					move_uploaded_file($_FILES["ifile"]["tmp_name"],"appsimage/".$_FILES["ifile"]["name"]);
					move_uploaded_file($_FILES["afile"]["tmp_name"],"apps/".$_FILES["afile"]["name"]);
					
					$query="INSERT INTO androidapp.apps(app_id,app_name,app_desc,more_desc,app_img,
					app_screen,app_link,app_cat) VALUES (NULL,'".$appName."','".$appDesc."',
					'".$moreDetail."','"."appsimage/".$_FILES['ifile']['name']."',
					'"."appsimage/".$_FILES['sfile']['name']."',
					'"."apps/".$_FILES['afile']['name']."',
					'".$appCat."');";
					
					include('config.inc.php');
					mysql_query($query) or die('not insert in database');
					echo "successfully inserted and uploaded  <a href='adminpanel.php'>upload more</a>";
						
					//echo $query;
				}//else	
				mysql_close();
				//header("LOCATION: adminpanel.php");
			}//else
	
	}//if


?>