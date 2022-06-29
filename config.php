<?php 

error_reporting(E_ALL ^ E_NOTICE);  

$servername = "localhost";
$username = "root";
$password = "";
$database = "GrandPlaza";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

?>