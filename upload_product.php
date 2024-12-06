<?php
	session_start();
	include("connect.php");
	
	//add mysqli_real_escape_string($conn,field_name) to clean up string
	
	$product_name = $_POST['pname'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$category = $_POST['category'];
	$location = $_POST['location'];
	$status ="Available";
	
	if(isset($_SESSION['current_user']))
	{
		$user = $_SESSION['current_user'];
		$pcode = substr($product_name,0,5).substr($user,0,3);
		
		//get users id number
		$stm = "Select * from users where user_id ='".$user."'";
		$res = mysqli_query($conn,$stm);
		$uid = "";
		$num = "";
		if(mysqli_num_rows($res)>0)
		{
			$row = mysqli_fetch_assoc($res);
			$uid = $row['id_num'];
			$num = $row['phone_num'];
			
		}
		
		//create directory
		$local = "uploads/".$pcode;
		echo "<script type='text/javascript'> alert('Creating directory'); </script>";
		if(!is_dir($local))
		{
			mkdir($local, 0755);
			$local = $local."/";
			$fileNames = array_filter(($_FILES['files']['name']));
			if(!empty($fileNames))
			{
				foreach($_FILES['files']['name'] as $key=>$val)
				{
					$fileName = basename($_FILES['files']['name'][$key]); 
					$targetFilePath = $local . $fileName;
					move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath);
					//echo "added image in folder";
				}
			}
			echo "<script type='text/javascript'> alert('Attempting insert'); </script>";
			$statement = "insert into products(Product_ID,Category,Location,Pictures,Price,Product_Description,Product_Name,Status,User_ID,Phone)
										values('$pcode','$category','$location','$local',$price,'$description','$product_name','$status','$uid',$num)";
			if(mysqli_query($conn,$statement))
			{
				echo "<script type='text/javascript'> alert('Product Added Successfully'); </script>";
				echo'<script type="text/javascript">location.href = "Home.php";</script>';
			}
			else
			{
				echo "could not execute query".mysqli_error($conn)." please retry";
			}
		}
		
		
	}
	else
	{
		echo "No user currently logged in";
	}

?>