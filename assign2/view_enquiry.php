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

    function check_login($conn)
{

	if(isset($_SESSION['id']))
	{

		$id = $_SESSION['id'];
		$query = "select * from users where id = '$id' limit 1";

		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
}

    $user_data = check_login($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css?v=4">
    <title>enquiryview</title>
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

            <a href="enquiry.php">Job View</a>
            <a href="registration.php">Membership View</a>
            <a href="view_enquiry.php">Enquiry View</a>
            <?php
            if(isset($_SESSION['id'])) {
                echo"<a href='#'>Welcome " . $user_data['username'] . "</a>";
                echo"<a href='login.php'>Log Out</a>";
            } else {
               echo"<a href='login.php'>Login</a>";
            }

            ?>
        </div>
    </nav>

<body class ="viewtables">
    <div class="viewtable">
        <h2>List Of Enquiries</h2>
        <a class = "button" href="new_enquiry.php" role="button">New Enquiry</a>
        <br>
        <div class = "viewtablecontainer">
        <table class = "table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Street Address</th>
                    <th>City</th>
                    <th>Malysia State</th>
                    <th>Postcode</th>
                    <th>Phone Number</th>
                    <th>Enquiry Type</th>
                    <th>Enquiry</th>
                    <th>Registration Date</th>
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
                $sql = "SELECT * FROM enquiry";  
                $result = mysqli_query($conn, $sql);

                if(!$result){
                    die("invalid query: " . $conn->error);
                }

                //read data of each row
                while($row = $result->fetch_assoc()){
                    echo"
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[first_name]</td>
                        <td>$row[last_name]</td>
                        <td>$row[email]</td>
                        <td>$row[street_adress]</td>
                        <td>$row[city]</td>
                        <td>$row[malaysia_state]</td>
                        <td>$row[postcode]</td>
                        <td>$row[phone_number]</td>
                        <td>$row[enquiry_type]</td>
                        <td>$row[enquiry]</td>
                        <td>$row[reg_date]</td>
                    <td>
                        <a class = 'button' href = 'edit.php?id=$row[id]'>Edit</a>
                        <a class = 'button delete' href = 'delete.php?id=$row[id]'>Delete</a>
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