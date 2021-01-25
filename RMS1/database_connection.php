<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";
$conn = mysqli_connect("localhost","root","","login_db");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
                           