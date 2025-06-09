<?php 

if (isset($_GET["id"])) { 

$id = $_GET["id"]; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BrewNGo";

// Create connection 
$conn = mysqli_connect($servername, $username, $password,$dbname);
$sql = "DELETE FROM enquiry WHERE id=$id"; 
$conn->query($sql); 
}

header("location:view_enquiry.php");
exit;
?> 