<?php
		session_start();
		include("connect.php");
		
		$db_response = $_SESSION['response'];
		$username = $_SESSION['user'];
		$response = $_POST['response'];
		$new_password = $_POST['pass'];
		
		if(strcmp($db_response,$response)==0)
		{
			$statement = "Update users set password='".$new_password."' where user_id='".$username."'";
			
			if(mysqli_query($conn,$statement))
			{
				echo '<script> alert("Information Updated") </script>';
				echo'<script type="text/javascript">location.href = "index.php";</script>';
			}
			else
			{
				echo '<script> alert("Could not update infomation") </script>';
				echo'<script type="text/javascript">location.href = "password_reset.php";</script>';
			}
		}
		else
		{
			echo '<script> alert("Responses do not match") </script>';
		}
?>