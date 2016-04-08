<style>

	
	#userSide{
		
		}
	#appSide{float:right;}
</style>
<?php 
	//include('header.php');
	include('config.inc.php');
	$uQuery="SELECT * FROM user order by user_id ASC limit 2";
	$aQuery="SELECT * FROM apps order by app_id ASC limit 2";
	$aIndex=mysql_query($aQuery) or mysql_error();
	$uIndex=mysql_query($uQuery) or mysql_error();
	echo "
	
		<form method='post' action='upload_file.php' enctype='multipart/form-data'>
			<table border='3px'>
				
				<tr>
					<td>Image:</td>
					<td><input type='file' name='ifile'/></td>
				</tr>
				<tr>
					<td>App:</td>
					<td><input type='file' name='afile'/></td>
				</tr>
				<tr>
					<td>Name:</td>
					<td><input type='text' name='txtApName'/></td>
				</tr>
				<tr>
					<td>Description:</td>
					<td><textarea name='txtArea'></textarea></td>
				</tr>
				<tr>
					<td>Category</td>
					<td><select name='aCat' id='cat'>
						<option value=''></option>
						<option value='Games'>Games</option>
						<option value='Education'>Education</option>
						<option value='Sports'>Sports</option>
					</select></td>
				</tr>
				<tr>
					<td colspan='3' align='center'><input type='reset' value='reset'/>
					<input type='submit' name='btnSubmit' value='upload'/></td>
				</tr>
			</table>
		</form>";
?>

 
<div id="userSide">
<table border=3px solid black>
<tr><th colspan="2">USER INFO</th></tr>
<?php
	while($user=mysql_fetch_assoc($uIndex)){
				echo "
					<tr >
						<th colspan=2>ID = ".$user['user_id']."</th>
					</tr>
					<tr><td colspan=2 align=center>
						<a href='updateData.php?uId=".$user['user_id']."'>update</a>
						<a href='deleteData.php?uId=".$user['user_id']."'>delete</a></td</tr>
					<tr><td>f name</td><td>".$user['user_fname']."</td></tr>
					<tr><td>l name</td><td>".$user['user_lname']."</td></tr>
					<tr><td>user name</td><td>".$user['user_name']."</td></tr>
					<tr><td>email</td><td>".$user['user_email']."</td></tr>
					<tr><td>name</td><td>".$user['user_name']."</td></tr>
					<tr><td>gender</td><td>".$user['user_gender']."</td></tr>
					<tr><td>DOB</td><td>".$user['user_dob']."</td></tr>
					<tr><td>name</td><td>".$user['user_name']."</td></tr>
					<tr><td>country</td><td>".$user['user_country']."</td></tr>
					<tr><td>role</td><td>".$user['user_role']."</td></tr>
				";
			}//while
?>
</table>
<div><!--end of userSide-->
<div id="appSide">
<table border=3px solid black>
<tr><th colspan="2">APP INFO</th></tr>
<?php
	while($apps=mysql_fetch_assoc($aIndex)){
			echo "
			<tr >
				<th colspan='2'>ID = ".$apps['app_id']."</th>
			</tr>
				<td colspan='2' align='center'><a href='updateData.php?id=".$apps['app_id']."'>update</a>
				<a href='deleteData.php?id=".$apps['app_id']."'>delete</a></td>
			<tr>
				<td>NAME</td><td>".$apps['app_name']."</td>
			</tr>
			<tr>
				<td>description</td>
				<td><textarea>".$apps['app_desc']."</textarea></td></td>
			</tr>
			<tr>
				<td>Img Path</td><td>".$apps['app_img']."</td>
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
</div><!--end of appside-->
