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
  
	  .navbar {
		top : 0;
    width: 100%;
    text-decoration: none;
    color: #fff;
    text-transform: uppercase;
      }	  
	   
      a {
        color: #00aaff;
      }
	  
	  body {
      color:#ff0000;		  
	  width: 100%;
		min-height:100vh;
		display:flex;
		flex-direction:row;
		flex-wrap:wrap;
		align-items:center;
		justify-content:center;
       background-image: url("images/auction-hammer-hue.jpeg");
    }
	
	.wrap{
		max-width:450px;
		border-radius:20px;
		margin:auto;
		background:rgba(0,0,0,0.8);
		box-sizing: border-box;
		padding: 40px;
		color: green;
		margin-top:50px;		
	}
	
	h2{
		text-align: center;
	}
	
	select{
		
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

	button[type=submit]{
		width: 100%;
		box sizing:border-box;
		padding: 10px 0#;
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
		box sizing:border-box;
		padding: 10px 0#;
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
	
		textarea{
		resize: none
	}

		input[type=submit]{
		width: 100%;
		box sizing:border-box;
		padding: 10px 0#;
		margin: top 30px;
		border: none;
		background: gold;
		opacity: 0.7;
		border-radius: 20px;
		font-size: 20px;
        color: #fff;				
	}
	
	input[type=submit]:hover{
		background: #003366;
		opacity:0.7;
	}
	
		textarea{
		resize: none
	}
	
		@media(max-width:1000px){
		.content{width: 45%;}
	}
	
		@media(max-width:750px){
		.content{width: 100%;}
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

			<div id="login_container" class="wrap" align="center">
		<h1 align="center">
			<strong> User Registration </strong>
		</h1>
			<form action="registration.php" method="post" enctype='multipart/form-data'>
			<table align="center">
				<tr>
					<td>
						<label style="color:white" ><h4><strong>Firstname</strong></h4> </label>
					</td>
					<td> 
						<input type="text" name="fname" id="fname" required>
					</td>
				</tr>
				<tr>
					<td>
						<label style="color:white" ><h4><strong>Lastname</strong></h4> </label>
					</td>
					<td>
						<input type="text" name="lname" id="lname" required>
					</td>
				</tr>
				<tr>
					<td>
						<label style="color:white" ><b> <strong>ID Number</strong> </b></label>
					</td>
					<td>
						<input type="number" name="idnum" id="idnum" required>
					</td>
				</tr>
				<tr>
					<td>
                        <label style="color:white" > <h4><strong>Gender</strong></h4></label>
					</td>
					<td>
						<select name="gender" id="gender" required>
							<option value="Male"> Male </option>
							<option value="Female">Female </option>
							<option value="Female">Other </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label style="color:white" > <h4><strong>Phone number</strong></h4></label>
					</td>
					<td>
						<input type="number" name="pnumber" id="pnumber" required>
					</td>
					
				</tr>
				<tr>
					<td>
						<label style="color:white" ><h4><strong>Username</strong></h4></label>
					</td>
					<td>
						<input type="text" name="username" id="username" required>
					</td>
				</tr>
				<tr>
					<td>
						<label style="color:white "><h4><strong>Password</strong></h4></label>
					</td>
					<td>
						<input type="password" name="pword" id="pword" required>
					</td>
				</tr>
				
				<tr>
					<td>
						<label style="color:white "><h4><strong>Confirm Password</strong></h4></label>
					</td>
					<td>
						<input type="password" name="cpword" id="cpword" required>
					</td>
				</tr>
				
				
						<tr>
					<td>
						<label style="color:white "><h4><strong>eMail Adress</strong></h4></label>
					</td>
					<td>
						<input type="email" name="email" id="email" required>
					</td>
				</tr>  

				<tr>
					<td>
						<label style="color:white" > <h4><strong>Security Question</strong></h4></label>
					</td>
					<td>
						<select name="question" id="question" required>
							<option value="In what city were you born?">In what city were you born? </option>
							<option value="What is the name of your favorite pet?">What is the name of your favorite sport?</option>
							<option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
							<option value="What high school did you attend?">What high school did you attend?</option>
							<option value="What is the name of your first school?">What is the name of your first school?</option>
							<option value="What was the make of your first car?">What was the make of your first car?</option>
							<option value="What was your favorite food as a child?">What was your favorite food as a child?</option>
							<option value="Where did you meet your spouse?">Where did you meet your spouse?</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label style="color:white" ><h4><strong>Response</strong></h4></label>
					</td>
					<td>
						<input type="text" id="response" name="response" required>
					</td>
				</tr>
				
				<tr>
					<td>
						<label style="color:white" ><h4><strong>Picture</strong></h4></label>
					</td>
					<td>
						<input type="file" name="upload" id="upload">
					</td>
				</tr>
				
				<tr>
					<td>
						<input type="submit" value="Create Account" class="create_button">
					</td>
				</tr>
			</table>
		</form></div>
		
	<?php
	include("footer.php");
	?>
	
	</body>
	</html>
	