<?php

	include("connect.php");
	$pid = $_GET['pid'];
	$stm = "delete from products where Product_ID='".$pid."'";
	if(mysqli_query($conn,$stm))
	{
		$stm2 = "delete from auction_items where Product_ID='".$pid."'";
		if(mysqli_query($conn,$stm2))
		{
			echo '<script> alert("Product removed successfully") </script>';
		echo'<script type="text/javascript">location.href = "view_products.php";</script>';
		}
	}
	

?>