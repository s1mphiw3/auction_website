
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
        

	
		  body {
    background-image: url("images/auction-hammer-hue.jpeg");
		  width: 100%;
		min-height:100vh;
		display:flex;
		flex-direction:column;
		flex-wrap:wrap;
		align-items:center;
		justify-content:center;
    }
	
   table{

		background:white;
		color: white;
    }
	
	.wrap{
		max-width:1000px;
		border-radius:20px;
		margin:auto;
		background:rgba(0,0,0,0.3);
		box-sizing: border-box;
		padding: 40px;
		color: white;
		margin-top:50px; 
	}
	
    .navbar {
		top : 0;
        width: 100%;
       text-decoration: none;
     color: #fff;
     text-transform: uppercase;
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
                      <!--   <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn  btn-warning" type="submit">Search</button>-->
        	<div class="nav-item dropdown">
						
                           <!--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                         
						 <?php
							                       /*   		include("connect.php");
										$user = $_SESSION['current_user'];
										$sql ="Select * from users where user_id='".$user."'";
										$res = mysqli_query($conn, $sql);
										$row = mysqli_fetch_assoc($res);
										$picture =$row['picture'];
										
										echo "<image src='".$picture."' class='img-circle' />";
										echo $row['fname'];*/
									?>
                           </a> -->
						   
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
-->
<?php
include("connect.php");


$sql="SELECT * FROM users";


if($result = mysqli_query($conn, $sql)){
 echo "<div class='wrap'>";
    if(mysqli_num_rows($result) > 0){
		
		if(isset($_SESSION['current_user']))
			{
				unset($_SESSION['current_user']);
			}
		
  echo "<table class='table table-striped'>";
  
  		   echo "<tr>";

                echo "<th>Id Number</th>";
				echo "<th>Firstname</th>";
				echo "<th>Lastname</th>";
				echo "<th>Username</th>";
				echo "<th>Gender</th>";
				echo "<th>Email</th>";
				echo "<th></th>";
				
    echo "</tr>";
	
		            if(isset($_SESSION['current_user']))
			{
				unset($_SESSION['current_user']);
			}
  
        while($row = mysqli_fetch_array($result)){
			
		        echo"<form action='Remove_user.php' method='post'>";

			   $uname =$row['id_num'] ;
			   $_SESSION['current_user'] = $uname;	
			   						
				
                echo "<tr class='warning'>";
			   

				echo"<td>". $row['id_num'] . "</td>";
				//echo"<td>". $_SESSION['current_user'] . "</td>";
				
				//echo"<input type='number' id='id_num' name='cellphone_number'  placeholder='". $row['id_num'] . "'>";
				
				
                echo "<td>". $row['fname'] . "</td>";

                echo "<td>" . $row['lname'] . "</td>";

                echo "<td>" . $row['user_id'] . "</td>";

                echo "<td>" . $row['gender'] . "</td>";

                echo" <td>" . $row['email'] . "</td>";
	            echo"<td><input type='submit' value='Remove User'></td></tr>";
                
				echo"</form>";
	   }
	    echo "</table>";
	echo "</div>";
    // Free result set

        mysqli_free_result($result);

    } else{

        echo "<br>No records matching your query were found.";

    }

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

}
?>
        	<?php
	include("footer.php");
	?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
    </body></html>
