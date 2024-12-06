<?php
	session_start();
	
	$id = $_SESSION['current_user'];
	
	include("connect.php");
	
	
	$path="upload/".
	$picture=$_POST['upload'];
	$pnumber = $_POST['cell'];
	$mail = $_POST['mail'];
	$target_dir = "uploads/";
	$target_file = $target_dir . $_FILES["upload"]["name"];
	
	//echo "<script type='text/javascript'> 
	
	$update ="uploads/".$row['".$picture."'];
	
	$sql = "Update users
			set phone_num ='".$pnumber."' ,
				email='".$mail."',
				Picture ='".$target_file."' 
			where
				user_id ='".$id."'";
	
	if(mysqli_query($conn,$sql))
	{
		if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
	  
			$location = $_FILES["upload"]["name"];
	  
		echo'<script type="text/javascript">location.href = "UserInfo.php";</script>';
	}
	else
	{
		echo"info wasnt updated";
	}
	}
	

?>