<?php
	session_start();
	include("connect.php");
	$uname = $_POST['username'];
	$pword = $_POST['pass'];
	
	if($uname !='' && $pword !='')
	{
		$sql ="Select * from users where user_id ='$uname' AND password ='$pword' ";
		//echo '<script> alert('.$name .' ' . $pword . ')'; 
		$result = mysqli_query($conn,$sql);
	
		if(mysqli_num_rows($result) > 0)
		{
			if(isset($_SESSION['current_user']))
			{
				unset($_SESSION['current_user']);
			}
			$_SESSION['current_user'] = $uname;
			$row = mysqli_fetch_assoc($result);
			$type = $row['user_type'];
			//echo $type;
			
			$t1 = "Normal";
			$t2 = "Admin";
			//check if normal user is logging in
			if(strcmp($type,$t1)==0)
			{
				echo'<script type="text/javascript">location.href = "Home.php";</script>';
			}
			else
			{
				//direct admin to admin page
				echo'<script type="text/javascript">location.href = "admin.php";</script>';
				
			}
			
		}
		else
		{
			echo '<script> alert("Incorrect username and password") </script>';
			echo'<script type="text/javascript">location.href = "login.php";</script>';
		}
	}
	else
	{
		echo '<script> alert("Please enter username and password") </script>';
		echo'<script type="text/javascript">location.href = "index.php";</script>';
	}

?>