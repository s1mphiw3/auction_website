
<?php
	session_start();
?>
<!doctype html>
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

<style  type="text/css">

	*{
		margin:0;
		padding:0;
		box-sizing: border-box;
	}
	
	  body {
    background-image: url("images/auction-hammer-hue.jpeg");
	background-size:cover;
    }
	
	.img-circle{
		display: block;
		margin-left:auto;
		margin-right:auto;
	    width: 40px;
		height: auto;
		margin: 2px;

	}
	
	
	   footer {  
	   position: fixed;
        bottom: 0;
        width: 100%;
       background:rgba(0,0,0,0.8);
        color: white;
		background-size:cover;
	   margin-top:60px;}
	
		
	.wrap{
		max-width:700px;
		border-radius:10px;
		margin:auto;
		background:rgba(0,0,0,0.8);
		box-sizing: border-box;
		padding: 10px;
		color: green;
		margin-top:10px;		
	}
	
	img{
		display: block;
		margin-left:auto;
		margin-right:auto;
	    width: 250px;
		height: auto;
		margin: 45px;

	}
	
	img:hover{
		background: #003366;
		opacity:0.9;
	}	
	
	.navbar {
		top : 0;
    width: 100%;
   text-decoration: none;
    color: #fff;
    text-transform: uppercase;
      }	
	  
      button[type=submit]{
		width: 100px;
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
	
	button[type=submit]:hover{
		background: #003366;
		opacity:0.7;
	}	
		@media(max-width:1000px){
		.content{width: 45%;}
		}
	
	
		@media(max-width:750px){
		.content{width: 100%;}
		}
		
		h2{ 
		   color: #000000;
			position:auto;
		    margin-left:auto;
		    margin-right:auto;
	        text-align: center;
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
                              <!--<span class="glyphicon glyphicon-user" style="font-size:40px"></span> 
							  <img src="..." alt="..." class="img-circle">        -->
							  
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
               <li><a class="dropdown-item" href="Logout.php"><span class="glyphicon glyphicon-log-out" style="font-size:10px"></span> Logout</a></li>
            </ul>
                       </div>
						
          </form>
        </div>
  </div>
</nav>

  <div id="login_container" class="wrap" align="center">
            <br/><br/>
		<a href='view_users.php'><strong> View Users </strong></a><br/>
		<a href='view_products.php'><strong> View Products </strong></a><br/>
		<a href='view_auctions.php'><strong> View Running Auctions </strong></a><br/></br>
		</div>
		
		<?php include("footer.php");?>
		
	</body>
</html>