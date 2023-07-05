<?php
$servername = "localhost";
$username = "root";
$password = "cdti1234";
$database = "db_baitoey";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

?>


