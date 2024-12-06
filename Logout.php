<?php
//include("config.php");
session_start();

unset($SESSION["current_user"]);
header("Location:Login.php");

?>