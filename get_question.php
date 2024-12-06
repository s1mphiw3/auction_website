<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
        
             <meta charset="utf-8">
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
        
    input[type=text],input[type=password],input[type=number],input[type=email]{
		width:200px;
		box-sizing:border-box;
		padding: 2px 5px;
		background: rgba(0,0,0,0.10)
		outline: none;
		border: none;
		border-bottom:1px dotted #fff;
		border-radius: 5px;
		margin: 5px;
		
	}
	
	.wrap{
		max-width:600px;
		max-height:300px;
		border-radius:10px;
		margin:auto;
		background:rgba(0,0,0,0.8);
		box-sizing: border-box;
		padding: 10px;
		color: green;
		margin-top:10px;		
	}	
	   footer {  
	   position: flexible;
        bottom: 0;
        width: 100%;
       background:rgba(0,0,0,0.8);
        color: white;
		background-size:cover;
           margin-top:60px;}
	
	h2{
		text-align: center;
		color: #00aaff;
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
		<?php
			include("connect.php");
			$username = $_POST['username'];
			
			$statement = "Select * from users where user_id='".$username."'";
			$result = mysqli_query($conn,$statement);
			
			if(mysqli_num_rows($result) > 0)
			{
				$row = mysqli_fetch_assoc($result);
				$question = $row['security_q'];
				$_SESSION['response'] = $row['response'];
				$_SESSION['user'] = $username;
				
                echo"<div class='wrap' align='centered'>";
				echo "<form method='post' action='reset_password.php'>
						<table>
							<tr>
								<td>
									<label style='color:white'><strong> Security Question </strong></label>
								</td>
								<td>
									<input type='text' name='question' value='".$question."' diasbled>
								</tr>
							</tr>
							<tr>
								<td>
									<label style='color:white'><strong> Response </strong></label>
								</td>
								<td>
									<input type='text' name='response' required>
								</td>
							</tr>
							<tr>
								<td> <label style='color:white'><strong> New Password</strong></label>
								</td>
								<td>
									<input type='text' name='pass' required>
								</td>
							</tr>
							<tr>
								<td> <button type='submit' value='Submit'> Submit <span class='glyphicon glyphicon-circle-arrow-right' aria-hidden='true'></span></butoon>
								</td>
							</tr>
						</table>
				</form>";
                echo"</div>";
			}
			else
			{
				echo '<script> alert("Incorrect username") </script>';
				echo'<script type="text/javascript">location.href = "password_reset.php";</script>';
			}
	?>
        
<footer id="footer" class="fixed-bottom">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3><strong>Contact Details</strong></h3>
              <p>
			  Auction Management 
                <br>
				
               P.O Box 298 Kwaluseni,  Matsapha <br><br>
              <strong><span class="glyphicon glyphicon-envelope"></span>  Email:</strong> auctionmanagement@gmail.com
               <br><br>
               <strong> <span class="glyphicon glyphicon-earphone"></span> Tel:</strong> (+268)&nbsp;78562421 &nbsp; / &nbsp;79542891   <br>
                             </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4><strong>Quick Links</strong></h4>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li> <a href="#">News</a></li>
              <li><a href="#">Mission  & Values </a></li>          
             </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4><strong>Auction Services</strong></h4>
            <ul>
              <li> <a href="#">Auction History</a></li>
              <li> <a href="#">Available Auction</a></li>           
            </ul>
          </div>

        </div>
      </div>
    </div>
	
	
    <div class="container" align="center">
      <div class="copyright">
          Copyright &copy; <span>2022</span>.&nbsp; All Rights Reserved<span> &nbsp;&nbsp;&nbsp; Auction Management</span>
      </div>
          </div>
  </footer><!-- End Footer -->
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  
	</body>
<html>