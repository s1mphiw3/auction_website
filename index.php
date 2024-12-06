<!doctype html>
<html>
<head>  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- Bootstrap CSS -->   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet">
	 <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	
		<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">		
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<style>
      a {
        color: #00aaff;
		text-align: center;
      }
	  
	  body {
    background-image: url("images/auction-hammer-hue.jpeg");
	background-size:cover;
    }
		.navbar{
     text-decoration: none;
     color: #AAA;
     text-transform: uppercase;
    }
	
	.wrap{
		max-width:300px;
		max-height:300px;
		border-radius:10px;
		margin:auto;
		background:rgba(0,0,0,0.8);
		box-sizing: border-box;
		padding: 10px;
		color: green;
		margin-top:10px;		
	}
	
	
	h2{
		text-align: center;
		color: #00aaff;
	}
	
		button[type=submit]{
		width: 150%;
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
	}
	
	button{	
	   width: 200px;
		box-sizing:border-box;
		padding: 10px auto;
		margin: top 30px;
		border: none;
		opacity:0.9;
		border-radius: 20px;
		font-size: 20px;
         }
		 
	button:hover{
		background: #003366;
		opacity:0.7;
	}
	.carousel-inner {
	width:640px;
	height:360px;
	}
	  </style>
</head>

<body style="font-family:new century schoolbook;">
	
<nav class="navbar navbar-expand-lg navbar-dark p-md-3" >
   <div class="container-fluid">
     <div class="collapse navbar-collapse" id="navBarheading">
	   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           <h1><strong>Auction Management</strong></h1>
      </ul>
	                      <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn  btn-warning" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </form>
        </div>
  </div>
</nav>

<div class="container">			
				          <!--Carousel Section-->
   <div id="agric" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button_warning" data-bs-target="#agric" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button_warning" data-bs-target="#agric" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button_warning" data-bs-target="#agric" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button_warning" data-bs-target="#agric" data-bs-slide-to="3" aria-label="Slide 4"></button>
	
  </div>
  <div class="carousel-inner">
  
    <div class="carousel-item active" data-bs-interval="1000">
      <img src="images/1.jpeg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        
        <h4 style="color:#FFFFFF">Fruit Trees</h4>
         <button class="btn  btn-danger">Read More</button>
      </div>
    </div>
	
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/2.png" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h4 style="color:black">On Sale</h4>
         <button class="btn  btn-danger">Read More</button>
      </div>
    </div>
	
    <div class="carousel-item">
      <img src="images/6.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h4 style="color:#FFFFFF">Soil Testing </h4>
         <button class="btn  btn-danger">Read More</button>
      </div>
    </div>
	
     <div class="carousel-item">
      <img src="images/4.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
    <h4 style="color:black">New Products</h4>
      <button class="btn  btn-danger">Read More</button>
      </div>
    </div>
	
    </div>  
  
    
	<button class="carousel-control-prev" type="button" data-bs-target="#agric"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </button>
  
  <button class="carousel-control-next" type="button" data-bs-target="#agric"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>  
  </button>
   </div>
   </div>
   
   <div id="login_container" class="wrap" align="center">
            <br/><br/>
             <a href="login.php" align="center"><strong> Login </strong></a> <br/>
	   	    <a href="register.php" align="center"><strong> Create New Account </strong></a> <br/>
			<a href="password_reset.php" align="center"><strong> Reset Password </strong></a> </div>
	   
	<?php
	include("footer.php");
	?>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	-->
</body>
</html>