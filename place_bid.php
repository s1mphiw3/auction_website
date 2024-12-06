<?php
	session_start();
	include("connect.php");
	
	//check if user is logged in
	if(isset($_SESSION['current_user']))
	{
		//get the user's i
		$user = $_SESSION['current_user'];
		$stm_id = "Select * from users where user_id ='".$user."'";
		
		$result = mysqli_query($conn,$stm_id);
		if(mysqli_num_rows($result) > 0)
		{
			$row = mysqli_fetch_assoc($result);
			$id = $row['id_num'];
			$date = date('d/m/Y h:i:s', time());
			
			$pid = $_GET['pid'];
			
			//check if there are any current bids on the product
			echo "<script type='text/javascript'> alert('".$pid."'); </script>";
			$stm_check = "select * from auction_items where Product_ID ='".$pid."'";
			$check_result = mysqli_query($conn,$stm_check);
			//echo mysqli_error($conn);
			if(mysqli_num_rows($check_result) > 0)
			{
				// there is an existing bid, get bid id and update bid
				$bid_row = mysqli_fetch_assoc($check_result);
				$bid = $bid_row['Bid_ID'];
				$bamount = $bid_row['Bid_Price'];
				$amount = $_POST['amount'];
				
				//check if bid amount is greater than the current bid
				
				if($amount > $bamount)
				{
					//place bid
					$stm_update = "update auction_items
						set Bidder_ID ='" .$id."',
							Bid_Price=".$amount.",
							Bid_Time ='".$date."'
							where Bid_ID =".$bid;
					if(mysqli_query($conn,$stm_update))
					{
						echo "<script type='text/javascript'> alert('Bid placed successfully'); </script>";
						echo'<script type="text/javascript">location.href = "Home.php";</script>';
					}
					else
					{
						echo mysqli_error($conn);
						echo "<script type='text/javascript'> alert('Could not place bid'); </script>";
						echo'<script type="text/javascript">location.href = "Home.php";</script>';
					}
				}
				else
				{
					echo "<script type='text/javascript'> alert('Could not place bid successfully, placed bid is less than the current bid'); </script>";
					echo'<script type="text/javascript">location.href = "Home.php";</script>';
				}
				
			}
			else
			{
					$id = $row['id_num'];
					$date = date('d/m/Y h:i:s', time());
					$pid = $_GET['pid'];
					$amount = $_POST['amount'];
					
				
				$stm_insert = "insert into auction_items(Product_ID,Bidder_ID,Bid_Price,Bid_Time,Status)
					values('".$pid."','".$id."',".$amount.",'".$date."','Available')";
					
				if(mysqli_query($conn,$stm_insert))
				{
					echo "<script type='text/javascript'> alert('New bid placed successfully'); </script>";
						echo'<script type="text/javascript">location.href = "Home.php";</script>';
				}
				else
				{
					echo mysqli_error($conn);
					//echo "<script type='text/javascript'> alert('New bid could not be placed'); </script>";
					
				}
				
			}
			
		}
	}
?>