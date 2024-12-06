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
	   background-size:cover;
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
		width: 70%;
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
		width: 120%;
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
		<div id="login_container" class="wrap" align="centered">
			<form method="post" action="log_in.php" >
			
		   <h1 align="center"><strong>Login</strong></h1>
				<table align="center">
					<tr>
						<td>
							<label style="color:white" > <strong><h3>Username</strong></h3></label>
						</td>
						<td>
							<input type="text" name="username" id="username" required>
						</td>
					</tr>
					<tr>
						<td>
							<label style="color:white"><h3><strong>Password </strong></h3></label>
						</td>&nbsp;
						<td>
							<input type="password" name="pass" id="pass" required>
						</td>
					</tr>
					<tr>
						<td>
							<button type="submit" value="Login" class="log_button"> Login <span class="glyphicon glyphicon-log-in"></button>
							</td>
							<td align='center'>
	                       <button type="reset"  value="Clear" class="clear_button" >Reset <span class="glyphicon glyphicon-remove-circle"></button>
						</td>
						
					</tr>
				</table>
			</form>
			<a href="register.php"> Create New Account </a> <br/>
			<a href="password_reset.php"> Reset Password </a>
			
		</div>
  
  
  <?php
  include("footer.php")
  ?>

</body>
</html>