<?php
	session_start();
	include("connect.php");
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
#show_image_popup{
  width: 400px;
  height: auto;
  max-height: 600px;
  border: 1px solid #333;
  box-sizing: border-box;
  padding: 5px;
  text-align: center;
  
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-image: url("images/auction-hammer-hue.jpeg");
  display: none;
}
#show_image_popup img{
 width: 300px;
  height: auto;
    max-height: 400px;
  max-width: 90%;

}

.close-btn-area{
  width: 100%;
  text-align: right;
  margin-bottom: 5px;
  
}
.close-btn-area button{
  cursor: pointer;
}
    
	   footer { 
		 bottom: 0;
        width: 100%;
        padding: 10px 20px;
		background-size :cover;
        background:#006400;
        color: black;
		margin-top:25px;
      }
    
                *{
		margin:0;
		padding:0;
		box-sizing: border-box;
	}
                
    img{
        align-items: center;
		display: block;
		margin-left:auto;
		margin-right:auto;
	    width: 100px;
		height: 80px;
		margin: 45px;
		margin-top:25px;

	}
	
		img:hover{
		transform: scale(1.1);
	}

	button[type=button]{
		width: auto;
	    height: auto;
		box-sizing:inherit;
		padding: 10px auto;
		border: none;
		background:  red;
		opacity: 0.7;
		border-radius: 10px;
		font-size: 20px;
        color: #fff;				
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
		  width: 100%;
		min-height:100vh;
		display:flex;
		flex-direction:rows;
		flex-wrap:wrap;
		align-items:left;
		justify-content:center;;
    }
	
	.gallery{
				width: 400px;
				margin: 5px;
				box-sizing: border-box;
				float:left;
				text-align:center;
				border-radius: 20px;
				cursor: pointer;
				padding-top: 10px;
				box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
				transition: .4s;
				background:rgba(0,0,0,0.8);
				color : white;
                }
			
   .content	{
				width: 400px;
				margin: 5px;
				box-sizing: border-box;
				float:left;
				text-align:center;
				border-radius: 20px;
				cursor: pointer;
				padding-top: 10px;
				box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
				transition: .4s;
				background:rgba(0,0,0,0.8);
				color : white;
       
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
                        <a class="nav-link" aria-current="page" href="admin.php"><span class="glyphicon glyphicon-home"></span> Home </a>
                       </li>
                      
                             <!-- <li class="nav-item">
         				 <a class="nav-link" href="#">Cisco Academy</a>
       						 </li>!-->
    
						  
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
               <li><a class="dropdown-item" href="Admin_User_info.php"><span class="glyphicon glyphicon-user" style="font-size:10px"></span> Profile</a></li>
			   <li><hr class="dropdown-divider"></li>
			   <li><a class="dropdown-item" href="view_users.php"><span class="glyphicon glyphicon-plus" style="font-size:10px"></span> View Users</a></li> 
			   	 <li><hr class="dropdown-divider"></li>
               <li><a class="dropdown-item" href="view_products.php"><span class="glyphicon glyphicon-usd" style="font-size:10px"></span> View Products</a></li>
			   <li><hr class="dropdown-divider"></li>
               <li><a class="dropdown-item" href="Logout.php"><span class="glyphicon glyphicon-log-out" style="font-size:10px"></span> Logout</a></li>

            </ul>
                       </div>
						
          </form>
        </div>
  </div>
</nav>	



		
			<?php
					include('connect.php');
					$stm = "select * from users";
					$result = mysqli_query($conn,$stm);
					if(mysqli_num_rows($result) > 0)
					{
						
						
						while($row = mysqli_fetch_assoc($result))
						{
							 echo "<div class='gallery'>";
							echo"<table align='center'>";
							//user information
							$image = $row['picture'];
							$name = $row['fname']."   ". $row['lname'];
							$email = $row['email'];
							$phone = $row['phone_num'];
							echo "<tr>
									<td>
										<img src='".$image."'></img>
									</td>
								</tr>
								<tr>
									<td> Name
									</td>
									<td>
										". $name."
									</td>
								</tr>
								<tr>
									<td>
										E-mail
									</td>
									<td>
										". $email."
									</td>
								</tr>
								<tr>
									<td>
										Phone Number 
									</td>
									<td>
										".$phone."
									</td>
								</tr>
								<tr align='centre'>
									<td>
										<a href='Remove_user.php?uid=".$row['id_num']."' target='self'> Remove user </a>
									</td>
								</tr>";
								echo"</table>";
								echo"</div>";
								
						}
						
						//echo"</div>";
					}
					
					include('footer.php');
			?>
		
	</body>
</html>