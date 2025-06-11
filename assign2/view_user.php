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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css?v=2">
    <title>User View</title>
</head>
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

            <a href="view_user.php">User View</a>
            <a href="view_job.php">Job View</a>
            <a href="view_membership.php">Membership View</a>
            <a href="view_enquiry.php">Enquiry View</a>
            <?php
            //changes buttons of nav bar based on user
            //checks to see if a user is logged in
            if(isset($_SESSION['id'])) {
                //if it is admin then nav bar will have a button to take admin back to admin dashboard
                echo"<a href='#'>Welcome, " . $user_data['username'] . "</a>";
                echo"<a href='login.php'>Log Out</a>";
            } else {
                //if a user is not logged in then there will be a login button
                echo"<a href='login.php'>Login</a>";
            }

            ?>
        </div>
    </nav>

<body class ="viewtables">
    <div class="viewtable">
        <h2>List Of Users</h2>
        <a class = "button" href="new_user.php" role="button">New User</a>
        <br>
        <div class = "viewtablecontainer">
        <table class = "table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "BrewNGo";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                //read all row from db base table
                $sql = "SELECT * FROM users";  
                $result = mysqli_query($conn, $sql);

                if(!$result){
                    die("invalid query: " . $conn->error);
                }

                //read data of each row
                while($row = $result->fetch_assoc()){
                    echo"
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[username]</td>
                        <td>$row[user_password]</td>
                    <td>
                        <a class = 'button' href = 'edituser.php?id=$row[id]'>Edit</a>
                        <a class = 'button delete' href = 'deleteuser.php?id=$row[id]'>Delete</a>
                    </td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>