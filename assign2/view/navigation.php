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

?>

<nav>
        <input type="checkbox" id="sidebar-active">
        <label for="sidebar-active" class="open-sidebar-button">
            <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#e3e3e3"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
        </label>

        <label id="overlay" for="sidebar-active"></label>
        <div class="links-container">
            <label for="sidebar-active" class="close-sidebar-button">
                <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#e3e3e3"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </label>
            <a class="home-link" href="index.php"><img class="logo" src="images/Brew&GoLogo.jpg" alt="logo"></a>
            <div class="dropdown">
                <a href="basicbrew.php">Products</a>
                <div class="dropdown-content">
                    <a href="basicbrew.php">Basic Brew</a>
                    <a href="artisanbrew.php">Artisan Brew</a>
                    <a href="noncoffee.php">Non-Coffee</a>
                    <a href="hotbeverages.php">Hot Beverages</a>
                </div>
            </div>

            <div class="dropdown">
                <a href="activity.php">Activities</a>
                <div class="dropdown-content">
                    <a href="comingsoon.php">Coming Soon</a>
                    <a href="current.php">Current</a>
                    <a href="past.php">Past Events</a>
                </div>
            </div>
            <a href="joinus.php">Join Us</a>
            <a href="enquiry.php">Enquiry</a>
            <a href="registration.php">Membership</a>
            <a href="findalocation.php">Find A Store</a>
            <?php
            //changes buttons of nav bar based on user
            //checks to see if a user is logged in
            if(isset($_SESSION['id'])) {
                //if it is admin then nav bar will have a button to take admin back to admin dashboard
                if($user_data['username'] === "Admin") {
                    echo"<a href='view_enquiry.php'>Admin Dashboard</a>";
                    echo"<a href='login.php'>Log Out</a>";  //login replaced with log out
                } else {
                    //regular users will just have a welcome message in their nav bar
                    echo"<a href='#'>Welcome, " . $user_data['username'] . "</a>";
                    echo"<a href='login.php'>Log Out</a>";  //log in replaced with log out
                }
            } else {
                //if a user is not logged in then there will be a login button
                echo"<a href='login.php'>Login</a>";
            }

            ?>
        </div>
    </nav>