<?php
	session_start();
	if( !isset($_SESSION['user_role']) || ($_SESSION['user_role']<1) || ($_SESSION['user_role']>20)){
		header("Location: myaccount.php");
	}else{
		include('config.inc.php');
		$uQuery="SELECT * FROM user order by user_id DESC";
		$aQuery="SELECT * FROM apps order by app_id DESC";
		$aIndex=mysql_query($aQuery) or mysql_error();
		$uIndex=mysql_query($uQuery) or mysql_error();
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<style type="text/css">

body {
width:750px;
margin:0 auto;}

#header {
width:750px;
height:auto;

}

#wrapper{
width:750px;
overflow:auto; 
margin-top:4px;
}

#navigation {
width:300px;
min-height:500px;  
height:auto; 
float:left;
margin-top:1.5px;
}

#content { 
margin-left:300px;
width:auto;
height:auto !important; 
margin-top:1.5px;
}

</style>
</head>
<body>
	<div id="header">
    	<form method='post' action='upload_file.php' enctype='multipart/form-data'>
			<table border='3px' align="center" width="750">
				<tr><th colspan="2">Upload Files</th></tr>
				<tr>
					<td>Image</td>
					<td><input type='file' name='ifile'/></td>
				</tr>
                <tr>
					<td>App</td>
					<td><input type='file' name='afile'/></td>
				</tr>
				<tr>
					<td>Screen Shot</td>
					<td><input type='file' name='sfile'/></td>
				</tr>
                <tr>
					<td>Name</td>
					<td><input type='text' name='txtApName'/></td>
				</tr>
				<tr>
					<td>Description</td>
					<td><textarea name='txtDesc'></textarea></td>
				</tr>
                <tr>
					<td>more detail</td>
					<td><textarea name='txtmoreDetail'></textarea></td>
				</tr>
				<tr>
					<td>Category</td>
					<td><select name='aCat' id='cat'>
						<option value=''></option>
						<option value='Games'>Games</option>
						<option value='Education'>Education</option>
						<option value='Entertainment'>Entertainment</option>
					</select></td>
				</tr>
				<tr>
					<td colspan='3' align='center'><input type='reset' value='reset'/>
					<input type='submit' name='btnSubmit' value='upload'/></td>
				</tr>
			</table>
		</form>
		
    </div><!--end of header-->
	<div id="wrapper">
		<div id="navigation">
			<table border=3px solid black width="300">
			<tr><th colspan="2">USER INFO</th></tr>
<?php
	while($user=mysql_fetch_assoc($uIndex)){
				echo "
					<tr >
						<th colspan=2>ID = ".$user['user_id']."</th>
					</tr>
					<tr><td colspan=2 align=center>
						<a href='updateUser.inc.php?uId=".$user['user_id']."'>update</a>
						<a href='deleteData.php?uId=".$user['user_id']."'>delete</a></td</tr>
					<tr><td>f name</td><td>".$user['user_fname']."</td></tr>
					<tr><td>l name</td><td>".$user['user_lname']."</td></tr>
					<tr><td>user name</td><td>".$user['user_name']."</td></tr>
					<tr><td>email</td><td>".$user['user_email']."</td></tr>
					<tr><td>name</td><td>".$user['user_name']."</td></tr>
					<tr><td>gender</td><td>".$user['user_gender']."</td></tr>
					<tr><td>DOB</td><td>".$user['user_dob']."</td></tr>
					<tr><td>role</td><td>".$user['user_role']."</td></tr>
				";
			}//while
?>
</table>
		</div><!--navigation-->
		<div id="content">
    		<table border=3px solid black width="450">
			<tr><th colspan="2">APP INFO</th></tr>
<?php
	while($apps=mysql_fetch_assoc($aIndex)){
			echo "
			<tr >
				<th colspan='2'>ID = ".$apps['app_id']."</th>
			</tr>
				<td colspan='2' align='center'><a href='updateApp.php?id=".$apps['app_id']."'>update</a>
				<a href='deleteData.php?id=".$apps['app_id']."'>delete</a></td>
			<tr>
				<td>NAME</td><td>".$apps['app_name']."</td>
			</tr>
			<tr>
				<td>description</td>
				<td><textarea>".$apps['app_desc']."</textarea></td></td>
			</tr>
			<tr>
				<td>more detail</td>
				<td><textarea>".$apps['more_desc']."</textarea></td></td>
			</tr>
			<tr>
				<td>Img Path</td><td>".$apps['app_img']."</td>
			</tr>
			<tr>
				<td>Screen shot Path</td><td>".$apps['app_screen']."</td>
			</tr>
			<tr>
				<td>App Path</td><td>".$apps['app_link']."</td>
			</tr>
			<tr id='trBor'>
				<td>Category</td><td>".$apps['app_cat']."</td>
			</tr>
			";
		}
?>
			</table>
		</div><!--content-->
	</div><!--wrapper-->
    
</body>
</html>