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
	    position: bottom;
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
                
	.gallery{
				display: flex;
				flex-wrap: wrap;
				width: 100%;
				justify-content:center;
				align-items: center;
				margin: 100px 0;
				padding-bottom: 10px;
				
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
				padding-bottom: 10px;
				box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
				transition: .4s;
				background:rgba(0,0,0,0.8);
				color : white;
       
			}
                
 .products{	 
		display:inline-block;
		flex-direction:column;
		flex-wrap: wrap;
		align-items:center;
		justify-content:center;
                }
				
	.img-circle{
		display: block;
		margin-left:auto;
		margin-right:auto;
	    width: 40px;
		height: auto;
		margin: 2px;

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
	
	button[type=submit]{
		width: 50%;
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
		@media(max-width:1000px){
		.content{width: 45%;}}
	
	
		@media(max-width:750px){
		.content{width: 100%;}}			
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
	
	
		<?php
			include("connect.php");
				
			
				$product_type = $_GET['category'];
				//echo $product_type;
				
				// get specific products matching the category
				$stat = "Select * from products where Category='".$product_type."'";
				$result = mysqli_query($conn,$stat);
				if(mysqli_num_rows($result) > 0)
				{
					 echo "<div class='gallery'>";
					echo "<table>";
					while($row = mysqli_fetch_array($result))
					{
						echo "<div class='content'>";
						echo"<h1>".$row['Product_Name']."</h1>  ";
						
						//get images for the corousal
						$images = scandir($row['Pictures']);
						foreach($images as $image)
						{
							if(strlen($image) > 4)
							{   echo"<div class='products'>";
								$location = $row['Pictures'].$image;
								echo "<image src='".$location."' class='small-image active'/>";
                              echo"</div>";							
							}
						}
						echo "
	
                               <h3>Description    </h3><h4>".$row['Product_Description']."</h3>
                                <h3>Category : ".$row['Category']."</h3>
								<h3>Price : ".$row['Price']."</h3>
								 <h3>Location : ".$row['Location']."</h3>
								 <h3>Phone  : ".$row['Phone']."</h3>"	;	
							
						//checck if the is a current bid on that product
					
						$stm = "Select * from auction_items where Product_ID='".$row['Product_ID']."'";
					
						$bid_result = mysqli_query($conn,$stm);
						if(mysqli_num_rows($bid_result) > 0)
						{
							// there is a current bid on the product
							$bid_row = mysqli_fetch_assoc($bid_result);
							$amount = $bid_row['Bid_Price'];
							echo "<form action='place_bid.php?pid=".$row['Product_ID']."' method='post'>
								
									<h3> Current Bid : E ".$amount." </h3>
							
							<h3>
								 Your Bid  E <input type='text' name='amount' id='amount'> 
							</h3>
							
								<button type='submit' value='Place Bid'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Place Bid</button>
							</form>";
						
						}
						else
						{
							//no current bids
							echo "<form action='place_bid.php?pid=".$row['Product_ID']."' method='post'>
								
								<h3> Current Bid E 0.00 </h3>
							
								<h3> Your Bid :  <input type='text' name='amount' id='amount'> </h3>	
		
								<button type='submit' value='Place Bid'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Place Bid</button>
							
							</form>";
						
						}
						echo"</div>	";
						
						  echo"

            <div id='show_image_popup'>

                 <button type='button' id='close-btn' ><span class='glyphicon glyphicon-remove-sign' style='font-size:20px'></span></button>
              
                <img id='large-image' src=' 'alt=' '>
              
            </div>";
                                                                             
            echo"     
        <script type='text/javascript'>
            $(document).ready(function(){
            
                $('.small-image').click(function(){
                                        var path=$(this).attr('src');
                                       $('#large-image').attr('src',path);
                                       $('#show_image_popup').fadeIn();
        })
        
        $('#close-btn').click(function(){
         $('#show_image_popup').fadeOut();
        })
        
        })
	
           </script>";
					} 
					
				echo"</div>";
					}
				
		
				

				else
				{
					echo "<script type='text/javascript'> alert('No products currently match you query'); </script>";
				echo'<script type="text/javascript">location.href = "Home.php";</script>';
				}
				
			

	?>

	<?php include("footer.php");?>
	</body>
<html>