<?php
	include("connect.php");
	
	$fname = mysqli_real_escape_string($conn,$_POST["fname"]);
	$lname = mysqli_real_escape_string($conn,$_POST["lname"]);
	$id = $_POST["idnum"];
	$gender = $_POST["gender"];
	$phone = $_POST["pnumber"];
	$username = mysqli_real_escape_string($conn,$_POST["username"]);
	$password = mysqli_real_escape_string($conn,$_POST["pword"]);
	$psecond = mysqli_real_escape_string($conn, $_POST["cpword"]);
	$email = mysqli_real_escape_string($conn,$_POST["email"]);
	$question = mysqli_real_escape_string($conn,$_POST["question"]);
	$response = mysqli_real_escape_string($conn,$_POST["response"]);
	//$picture = mysqli_real_escape_string($conn,$_POST["picture"]);
	$type = "Normal";
	
	//check if all fields are filled in 
	 
	
	
	if(strcmp($password,$psecond) == 0)
	{
		
		//upload of image to directory
		//add condition if user chooses not to add image
		
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["upload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		
		$location="";
		// Check if image file is a actual image or fake image
		/*if(isset($_POST["submit"]))
		{
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false)
			{
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} 
			else
			{
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}*/
		
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0)
		{
			echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
		}
		else
		{
			if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
			
			$location ="uploads/". $_FILES["upload"]["name"];
	  
			//echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
		}
		else
		{
			echo "Sorry, there was an error uploading your file.";
		}
}
		$type="Normal";
		//execution of user infromation upload
		$statement = "Insert into users (id_num,fname,lname,email,phone_num,user_id,gender,password,security_q,response,picture,user_type) values
							($id,'$fname','$lname','$email',$phone,'$username','$gender','$password','$question','$response','$location','$type')";
							
		//echo '<script> alert("Attempting insert") </script>';
		if(mysqli_query($conn,$statement))
		{
				echo '<script> alert("User Added Successfully") </script>';
				//check what the error is b4 changing to login page
				echo'<script type="text/javascript">location.href = "login.php";</script>';
		}
		else{
			echo '<script> alert(Error description: '. mysqli_error($conn).'</script>';
			echo'<script type="text/javascript">location.href = "register.php";</script>';
		}
	}
	
	else
	{
		echo '<script> alert("Please enter similar passwords") </script>';
		echo'<script type="text/javascript">location.href = "register.php";</script>';
	}
?>