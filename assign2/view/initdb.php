<?php
// set the servername,username and password
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
//mysqli_query() function performs a query against a database.
$sql = "CREATE DATABASE IF NOT EXISTS BrewNGo";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<?php
// set the servername,username and password
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BrewNGo";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create enquiry table
	$sql = "CREATE TABLE IF NOT EXISTS enquiry (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	first_name VARCHAR(30) NOT NULL,
	last_name VARCHAR(30) NOT NULL,
	email VARCHAR(50),
    street_adress VARCHAR(50),
    city VARCHAR(50),
    malaysia_state VARCHAR(50),
    postcode INT(5),
    phone_number VARCHAR(15),
    enquiry_type VARCHAR(50),
    enquiry VARCHAR(5000),
	reg_date TIMESTAMP
	)";

if (mysqli_query($conn, $sql)) {
    echo "Table Enquiry created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// sql to create membership table
$sql = "CREATE TABLE IF NOT EXISTS membership (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	first_name VARCHAR(30) NOT NULL,
	last_name VARCHAR(30) NOT NULL,
	email VARCHAR(50),
    membership_username VARCHAR(50),
    membership_password VARCHAR(50),
	reg_date TIMESTAMP
	)";

if (mysqli_query($conn, $sql)) {
    echo "Table Membership created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// sql to create joinus table
// not sure how to do files
// this form has a resume and image
$sql = "CREATE TABLE IF NOT EXISTS join_us (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	first_name VARCHAR(30) NOT NULL,
	last_name VARCHAR(30) NOT NULL,
	email VARCHAR(50),
    phone_number INT(15),
    street_adress VARCHAR(50),
    city VARCHAR(50),
    malaysia_state VARCHAR(50),
    postcode INT(5),
	reg_date TIMESTAMP
	)";

if (mysqli_query($conn, $sql)) {
    echo "Table join_us created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// sql to create users table
$sql = "CREATE TABLE IF NOT EXISTS users (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	username VARCHAR(30) NOT NULL,
	user_password VARCHAR(30) NOT NULL
	)";

if (mysqli_query($conn, $sql)) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "INSERT IGNORE INTO users (id, username, user_password) 
    VALUES ('1', 'admin', 'admin')
    ON DUPLICATE KEY UPDATE
    username = 'admin', user_password = 'admin'";

if (mysqli_query($conn, $sql)) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>