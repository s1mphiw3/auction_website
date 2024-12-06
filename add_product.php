<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link href="style.css" rel="stylesheet">
		
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">		
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
			
			<style>
	   footer { 
		 bottom: 0;
        width: 100%;
        padding: 10px 20px;
		background-size :cover;
        background:#006400;
        color: black;
		margin-top:25px;
      }

      a {
        color: #00aaff;
      }
	  
    .navbar {
		top : 0;
        width: 100%;
       text-decoration: none;
     color: #fff;
     text-transform: uppercase;
      }
	  
	  body {
    background-image: url("images/auction-hammer-hue.jpeg");
		background-size:cover;
    }
	
	.wrap{
		max-width:600px;
		border-radius:20px;
		margin:auto;
		background:rgba(0,0,0,0.8);
		box-sizing: border-box;
		padding: 40px;
		color: green;
		margin-top:50px; 
        font-weight: bold; 
	}
	
	.pde{
        resize: none;
          height:90px;
	}
	
	input[type=text],input[type=password],input[type=number],input[type=email]{
		width:200px;
		box-sizing:border-box;
		padding: 2px 5px;
		background: white;
		outline: none;
		border: none;
		border-bottom:1px dotted #fff;
		border-radius: 5px;
		margin: 5px;
		font-weight: bold; 
	}
	
	textarea,select{
	    width:200px;
		box-sizing:border-box;
		padding: 2px 5px;
		background: white;
		outline: none;
		border: none;
		border-bottom:1px dotted #fff;
		border-radius: 5px;
		margin: 5px;
	}
	


	button[type=submit]{
		width: 100%;
		box-sizing:border-box;
		padding: 10px auto;
		margin: top 30px;
		border: none;
		background:  #FFC000;
		opacity: 0.7;
		border-radius: 20px;
		font-size: 20px;
        color: #fff;				
	}
	
	button[type=submit]:hover{
		background: #003366;
		opacity:0.7;
	}
	
		button[type=reset]{
		width: 100%;
		box-sizing:border-box;
		padding: 10px auto;
		margin: top 30px;
		border: none;
		background:  red;
		opacity: 0.7;
		border-radius: 20px;
		font-size: 20px;
        color: #fff;				
	}
	
	button[type=reset]:hover{
		background: #003366;
		opacity:0.7;
	}
	
	.img-circle{
		display: block;
		margin-left:auto;
		margin-right:auto;
	    width: 40px;
		height: auto;
		margin: 2px;

	}
	</style>
	
	
	</head>
	
	<body style="font-family:new century schoolbook;">
	<nav class="navbar navbar-expand-lg navbar-dark p-md-3" >
   <div class="container-fluid">
     <div class="collapse navbar-collapse" id="navBarheading">
	   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
	 <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Home.php"><span class="glyphicon glyphicon-home"></span> Home </a>
                       </li>
                      
                             <!-- <li class="nav-item">
         				 <a class="nav-link" href="#">Cisco Academy</a>
       						 </li>!-->
    
                       <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                              <span class="glyphicon glyphicon-leaf"></span> Autions
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <li><a class="dropdown-item" href="#">Running</a></li>
                               <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">History </a></li>
						  </ul>
						  </li>
						  
						  <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                            <span class="glyphicon glyphicon-star">News</span>
                           </a>
							 <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							 <li><a class="dropdown-item" href="#">Upcoming Events</a></li>
							 <li><hr class="dropdown-divider"></li>
							 <li><a class="dropdown-item" href="#">Cancelled Auctions</a></li>
							 </ul>
							 </li>
						
					   
                   
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                              <span class="glyphicon glyphicon-question-sign"></span>  About Us
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <li><a class="dropdown-item" href="ContactUs.php">Contact Us</a></li>
                               <li><hr class="dropdown-divider"></li>
                               <li><a class="dropdown-item" href="#"> Background & History</a></li>
                               <li><hr class="dropdown-divider"></li>
                                 <li><a class="dropdown-item" href="#">Mission & Values</a></li>
                                 <li><hr class="dropdown-divider"></li>
                               <li><a class="dropdown-item" href="#"> Stakeholders Consultation</a></li>
                           </ul>
                       </li>
	
      </ul>

      </form>
	  <form class="d-flex">
                       <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn  btn-warning" type="submit">Search</button>-->
        	<div class="nav-item dropdown">
						
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                     <?php
										include("connect.php");
										$user = $_SESSION['current_user'];
										$sql ="Select * from users where user_id='".$user."'";
										$res = mysqli_query($conn, $sql);
										$row = mysqli_fetch_assoc($res);
										$picture =$row['picture'];
										
										echo "<image src='".$picture."' class='img-circle' />";
										echo $row['fname'];
									?>
                           </a> 
						   
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
               <li><a class="dropdown-item" href="UserInfo.php"><span class="glyphicon glyphicon-user" style="font-size:10px"></span> Profile</a></li>
			    <li><hr class="dropdown-divider"></li>
               <li><a class="dropdown-item" href="view_user_products.php"><span class="glyphicon glyphicon-usd" style="font-size:10px"></span> View Products</a></li>
			   <li><hr class="dropdown-divider"></li>
               <li><a class="dropdown-item" href="Logout.php"><span class="glyphicon glyphicon-log-out" style="font-size:10px"></span> Logout</a></li>

            </ul>
                       </div>
						
          </form>
        </div>
  </div>
</nav>	
	
	<div class="wrap">
    	<h1 align = "center"><strong> Add Product </strong></h1>
		<form method="POST" action="upload_product.php" enctype="multipart/form-data">
			<table align="center">
				<tr>
					<td>
						<label style="color:white"><strong>Product name </strong></label>
					</td>
					<td>
						<input type="text" name="pname" id="pname" required>
					</td>
				</tr>
				
				<tr>
				
				<tr>
					<td>
						<label style="color:white"><strong>Product Description </strong></label>
					</td>
					<td>
						<textarea class="pde" id="description" name="description" rows="4" cols="50" required>
						
						</textarea>
					</td>
				</tr>
				
				<tr>
					<td>
						<label style="color:white"><strong>Product Category </strong></label>
					</td>
					<td>
						<select id="category" name="category" required>
							
						<option value="Electronics">Electronics </option>
						<option value="Automotive"> Automotive </option>
						<option value="Livestock"> Livestock </option>
						<option value="Heavy Machinery"> Heavy Machinery </option>
						<option value="Land and Houses"> Land and Houses </option>
						<option value="Furniture"> Furniture </option>
						<option value="Home Appliances"> Home Appliances </option>
						<option value="Kitchen Utensils"> Kitchen Utensils </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label style="color:white"><strong>Price <strong></label>
					</td>
					<td>
						<input type="text" name="price" id="price" required>
					</td>
				</tr>
				<tr>
					<td>
						<label style="color:white"><strong>Location </strong></label>
					</td>
					<td>
						<input type="text" name="location" id="location" required>
					</td>
				</tr>
				<tr>
					<td>
						<label style="color:white"><strong>Pictures </strong></label>
					</td>
					<td>
						<input type="file" name="files[]" id="picture" accept=".avif,.gif,.jpg,.JPG,.jpeg,.jfif,.pjpeg,.pjp,.png" multiple>
					</td>
				</tr>
				<tr>
					<td>
						<button type="submit" value="Add Product" class="create_button">  <span class="glyphicon glyphicon-plus"></span> Add Product</button>
					</td>
				</tr>
				
			</table>

		</form>
		</div>
		
						         <!-- ======= Footer ======= -->
                 <?php
				 include ("footer.php");
				 ?>
	</body>
</html>