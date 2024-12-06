<?php

	include("connect.php");
	$id = $_GET['uid'];
	
	$stm = "delete from users where id_num=".$id;
	if(mysqli_query($conn,$stm))
	{
		$prod = "select * from products where User_ID=".$id;
		$res = mysqli_query($conn,$prod);
		if(mysqli_num_rows($res)>0)
		{
			while($row = mysqli_fetch_array($res))
			{
				$pid = $row['Product_ID'];
				$auct = "delete from auction_items where Product_ID=".$pid;
				if(mysqli_query($conn,$auct))
				{
					echo "<script> alert('User Removed Successfully') </script>";
				}
			}
			
			$del = "delete from products where User_ID=".$id;
			if(mysqli_query($conn,$del))
			{
				echo "<script> alert('User Removed Successfully') </script>";
			}
			
			echo "<script> alert('User Removed Successfully') </script>";
			echo "<script type='text/javascript'> location.href='view_users.php' </script>";
			
		}
	}


?>