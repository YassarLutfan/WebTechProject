<?php 

if (isset($_GET["id"])) { 

$id = $_GET["id"]; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BrewNGo";

// Create connection 
$conn = mysqli_connect($servername, $username, $password,$dbname);
$sql = "DELETE FROM membership WHERE id=$id"; 
$conn->query($sql); 
}

header("location:view_membership.php");
exit;
?> 