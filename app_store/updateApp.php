<?php
	session_start();
	if( !isset($_SESSION['user_role']) || ($_SESSION['user_role']>20) ){
		header("Location: myaccount.php");
	}
	$view=0;
	if(!empty($_GET['id'])){
		$id=$_GET['id'];
		$view=1;
		
		include('config.inc.php');
		$aQuery="SELECT * FROM apps where app_id=".$id;
		$aIndex=mysql_query($aQuery) or mysql_error();
		$apps=mysql_fetch_assoc($aIndex);
		
	}
	
	if($view==1){
	echo "
		<form method='post' action='saveUpdateApp.php?aId=".$apps['app_id']."'>
		<table border=3px solid black>
			<tr><th colspan=2>APP INFO</th></tr>
			<tr><th colspan =2> ID=".$apps['app_id']."</th></tr>
			<tr><td>name</td><td><input name='aName' value='".$apps['app_name']."' /></td></tr>
			<tr>
				<td>description</td>
				<td><textarea name='aDesc'>".$apps['app_desc']."</textarea></td>
			</tr>
			<tr>
				<td>more detail</td>
				<td><textarea name='aMoreDesc'>".$apps['more_desc']."</textarea></td>
			</tr>
			<tr><td>image path</td><td>
			<input name='aImg' value='".$apps['app_img']."' /></td></tr>
			<tr><td>screen shot path</td><td>
			<input name='aScreen' value='".$apps['app_screen']."' /></td></tr>
			<tr><td>app path</td><td>
			<input name='aLink' value='".$apps['app_link']."' /></td></tr>
			<tr><td>category</td><td>
			<select placeholer='".$apps['app_cat']."' name='aCat'>
				<option value='Games'>Games</option>
				<option value='Education'>Education</option>
				<option value='Entertainment'>Entertainment</option>
			</select></td></tr>
			<tr><td colspan =2 align='center'><input type='submit' name='btnSubApp' value='update'/></td></tr>
		</table>	
		</form>
	";
	}
	mysql_close();
?>