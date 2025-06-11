<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BrewNGo";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$first_name = "";
$last_name = "";
$email = "";
$membership_username ="";
$membership_password = "";
$reg_date = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $membership_username = $_POST["membership_username"];
    $membership_password = $_POST["membership_password"];
    $reg_date = date("Y-m-d H:i:s"); // e.g., 2025-06-08 14:37:25


    do {
        if (
            empty($first_name) || empty($last_name) || empty($email) ||
            empty($membership_username) || empty($membership_password) || empty($reg_date)
        ) {
            $errorMessage = "All fields are required";
            break;
        }

        $sql = "INSERT INTO membership(first_name, last_name, email, membership_username, membership_password, reg_date)" . 
                    "VALUES('$first_name', '$last_name', '$email', '$membership_username', '$membership_password', '$reg_date')";
        $result = $conn->query($sql);

        if(!$result){
            $errorMessage= "Invalid query: " . $conn->error;
            break;
        }

        $first_name = "";
        $last_name = "";
        $email = "";
        $membership_username = "";
        $membership_password = "";
        $reg_date = "";

        $successMessage = "Membership Added";

        header("location:view_membership.php");
        exit;

    } while(false);
}

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
    <link rel="stylesheet" href="styles/style.css?v=4">
    <title>New Membership</title>
</head>

<body class = "viewcontainer">
    <div>
        <h2>New Membership</h2>
        <?php
        if (!empty($errorMessage)){
            echo"
            <div>
                <strong>$errorMessage</strong>
                <button type = 'button'></button>
            </div>
            ";
        }
        ?>
        <form method="post">
            <div>
                <label>First Name</label>
                <div>
                    <input type = "text"  class = "form-control" name = "first_name" required="required" pattern="[a-zA-Z]+" maxlength="25" value = "<?php echo $first_name; ?>">
                </div>
            </div>
            <div>
                <label>Last Name</label>
                <div>
                    <input type = "text"  class = "form-control" name = "last_name" required="required" pattern="[a-zA-Z]+" maxlength="25" value = "<?php echo $last_name; ?>">
                </div>
            </div>
            <div>
                <label>Email</label>
                <div>
                    <input type = "text"  class = "form-control" name = "email" required="required" placeholder="example@example.com" value = "<?php echo $email; ?>">
                </div>
            </div>
            <div>
                <label>Username</label>
                <div>
                    <input type = "text"  class = "form-control" name = "membership_username" required="required" pattern="[a-zA-Z]+" maxlength="10" value = "<?php echo $membership_username; ?>">
                </div>
            </div>
            <div>
                <label>Password</label>
                <div>
                    <input type = "password"  class = "form-control" name = "membership_password" required="required" pattern="[a-zA-Z0-9]+" maxlength="25" value = "<?php echo $membership_password; ?>">
                </div>
            </div>
            
            <?php
            if (!empty($successMessage)){
                echo"
                <div>
                    <strong>$successMessage</strong>
                    <button type = 'button'></button>
                </div>
                ";
            }
            ?>

            <div class="form-buttons">
                <button type="submit">Submit</button>
                <a href="view_membership.php" role="button">Cancel</a>
            </div>

        </form>
    </div>
    
</body>
</html>