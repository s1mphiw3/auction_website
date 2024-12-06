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
	  width: 100%;
		min-height:100vh;
		display:flex;
		flex-direction:row;
		flex-wrap:wrap;
		align-items:left;
		justify-content:center;
        background-image: url("images/auction-hammer-hue.jpeg");
    }
	
	.img-circle{
		display: block;
		margin-left:auto;
		margin-right:auto;
	    width: 40px;
		height: auto;
		margin: 2px;

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
		.content{width: 45%;}}
	
	
		@media(max-width:750px){
		.content{width: 100%;}}
		
		h2{ 
		   color: #000000;
			position:auto;
		    margin-left:auto;
		    margin-right:auto;
	        text-align: center;
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
                              <span class="glyphicon glyphicon-leaf"></span> Auctions
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
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn  btn-warning" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      </form>
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
               <li><a class="dropdown-item" href="UserInfo.php"><span class="glyphicon glyphicon-user" style="font-size:10px"></span> Profile</a></li>
			   <li><hr class="dropdown-divider"></li>
			   <li><a class="dropdown-item" href="add_product.php"><span class="glyphicon glyphicon-plus" style="font-size:10px"></span> Add Products</a></li>
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
        <div class="hvy"><a href="get_products.php?category=Heavy Machinery" target="_self">
		<img src="images/Heavy-Equipment.jpg"/>
		<h2>Heavy Machinery</h2></a>	
		</div>
		
		<div class="atm">
		<a href="get_products.php?category=Automotive" target="_self">
		<img src="images/automotive projects to watch 2021.png" />
		<h2>Automotives</h2>
		</a></div>
		
		<div class="appl">
		<a href="get_products.php?category=Home Appliances" target="_self">
		<img src="images/appliances.jpg "/>
		<h2>Appliances</h2></a></div>
		
		<div class="elect">
		<a href="get_products.php?category=Electronics" target="_self">
		<img src="images/electronics.jpeg"/>
		<h2>Electronics</h2></a>
		</div>
			
		<div class="KU">
		<a href="get_products.php?category=Kitchen Utensils" target="_self">
		<img src="images/Kitchen-Utensils-Key-Feature-1.webp"/>
		<h2>Kitchenware</h2></a>
		</div>
		
		<div class="H&L">
		<a href="get_products.php?category=Land and Houses" target="_self">
		<img src="images/houses_and_land-5bfc3326c9e77c0051812eb3.jpg"/>
		<h2>Land & Houses</h2></a>
        </div>
		
		<div class="Livestock">
	    <a href="get_products.php?category=Livestock" target = "_self"> 
		<img src="images/livestock.jpg" />
		<h2>Livestock</h2>
		</a></div>
		
		<div class="Livestock">
	    <a href="get_products.php?category=Furniture" target = "_self"> 
		<img src="images/ImageBannerBlock_01.jpg" />
		<h2>Furniture</h2>
		</a></div>

	<?php
	include("footer.php");
	?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>