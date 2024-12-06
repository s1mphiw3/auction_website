<?php

		$conn = new mysqli("localhost","root","","auction_db");

// Check connection
if (!$conn) 
{
  die("Connection failed: \n".mysqli_connect_error());
}


?>