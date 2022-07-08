<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "scolaricxv1";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "conn connection error".mysqli_connect_error();
  }
  if (!isset($_COOKIE['user_cookie'])) {
	header("Location: auth-login.php");
	exit();
	# code...
  } 
?>