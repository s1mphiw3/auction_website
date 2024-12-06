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
	
    <meta charset="utf-8"/>	
	<meta name="viewport" content="width=device-width, initial-scale 1"/>
	
<style type="text/css">
       
	   	.wrap{
		max-width:400px;
		border-radius:20px;
		margin: auto;
		background:rgba(0,0,0,0.8);
		box-sizing: border-box;
		padding: 40px;
		color: white;
		margin-top:100px;
    align-content: center;
		
	}

  button[type=submit]{
		width: 200px;
		box-sizing:border-box;
		padding: 10px auto;
		margin: top 30px;
		border: none;
		background:  #FFC000;
		opacity:0.7;
		border-radius: 20px;
		font-size: 20px;
        color: #fff;	
	
	}
	
		img{
		display: block;
		margin-left:auto;
		margin-right:auto;
	    width: 200px;
		height: auto;
		margin: 45px;
        align-items:center;

	}

	textarea{
		resize: none;
	}
	
	button[type=submit]:hover{
		background: #003366;
		opacity:0.7;
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
		flex-direction:column;
		flex-wrap:wrap;
		align-items:center;
		justify-content:center;;
    }
	
	.img-circle{
		display: block;
		margin-left:auto;
		margin-right:auto;
	    width: 40px;
		height: auto;
		margin: 2px;

	}
	
	.wrap{
		max-width:400px;
		border-radius:20px;
		margin:auto;
		background:rgba(0,0,0,0.8);
		box-sizing: border-box;
		padding: 40px;
		color: white;
		margin-top:50px; 
	}
      table{
        table-layout: auto;
        width: 180px;
      }
	@media(max-width:1000px){
		.content{width: 45%;}
	}
	
    @media(max-width:750px){
		.content{width: 100%;}
	}
	      a {
        color: #00aaff;
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
	

	button[type=submit]{
		width: 170%;
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
	
	
		textarea{
		resize: none
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
			   <li><a class="dropdown-item" href="add_product.php"><span class="glyphicon glyphicon-plus" style="font-size:10px"></span> Add Product</a></li> 
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
	

		<div id="login_container" class="wrap" >	
		<?php
			include("connect.php");
			$id = $_SESSION['current_user'];
			//echo $id;
	
			//select user info
			$sql = " Select * from users where user_id='".$id."'";
			$res = mysqli_query($conn,$sql);
			if(mysqli_num_rows($res) > 0)
			{
				//echo "fond you";
				$row = mysqli_fetch_assoc($res);
	
				$picture =$row['picture'];
				$cell = $row['phone_num'];
				$mail = $row['email'];
				//echo " continuing";
		
				//start form to update user info
				echo "
					<form method='post' action='update_User_info.php'   enctype='multipart/form-data'>
										
					 <image src='".$picture."'  />
					<table>	
					
					
					<tr><td><label style='color:white' ><strong>Picture</strong></label></td>
					
						<td><input type='file' name='upload' id='upload'></td></tr>


					
							<tr>
								<td>
									<label style='color:white'><strong>Cellphone Number</strong></label>
								</td>
								<td>
									<input type='text' name='cell' placeholder='".$cell."' required>
								</td>
							</tr>
							
							<tr>
								<td>
									<label style='color:white'><strong>Email</strong></label>
								</td>
								<td>
									<input type='email' name='mail' placeholder='".$mail."' required>
								</td>
							</tr>							
							
							<tr>
								<td>
									<button type='submit' value='Update Information'>  Update  </button>
								</td>
							</tr>
						</table>
					</form>";
		
		
			}
			else
			{
				echo "invalid user info";
				//change to index page
			}
			
			
		?>
	</div>
	<?php
	include('footer.php') ?>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	-->
</html>