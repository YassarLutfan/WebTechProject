<?php
    session_start();
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

    //login checking is done inside nav bar because nav bar uses login user data and is present on all pages
    function check_login($conn)
{
    //checks to see if a session is active
	if(isset($_SESSION['id']))
	{
        //using session id to reference back to database
		$id = $_SESSION['id'];
		$query = "select * from users where id = '$id' limit 1";
        //getting user data from database
		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
}
    //setting user_data to store user data from database for use 
    $user_data = check_login($conn);

    //to check if user on this page is admin, otherwise send user to index page
    //also functions as a safety net if admin accidently edits themself or deletes themself
    if(isset($_SESSION['id'])) {
        if($user_data['username'] !== "Admin" || $user_data['user_password'] !== "Admin") {
            header("Location: index.php");
            die;
        }
    } else {
        //to handle a visitor that didnt log in
        header("Location: index.php");
            die;
    }
?>
