<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BrewNGo";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$username ="";
$user_password = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(!isset($_GET["id"])){
        header("location:view_membership.php");
        exit;
    }

    $id = $_GET["id"];

    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location:view_user.php");
        exit;
    }

    $username = $row["username"];
    $user_password = $row["user_password"];
}
else{
    $username = $_POST["username"];
    $user_password = $_POST["user_password"];
    $id = $_POST["id"];

    do{
        if (
            empty($username) || empty($user_password) 
        ) {
            $errorMessage = "All fields are required";
            break;
        }

        $sql = "UPDATE users " . 
       "SET username = '$username', user_password = '$user_password' " . 
       "WHERE id = $id";

        $result = $conn->query($sql);

        if(!$result){
            $errorMessage = "Invalid query: " . $conn->error;
            break;
        }

        $successMessage = "User successfully updated";

        header("location: view_user.php");
        exit;

    }while(false);
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
    <title>New User</title>
</head>

<body class = "viewcontainer">
    <div>
        <h2>New User</h2>
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
            <input type ="hidden" name="id" value="<?php echo $id; ?>">
            <div>
            <div>
                <label>Username</label>
                <div>
                    <input type = "text"  class = "form-control" name = "username" required="required" pattern="[a-zA-Z]+" maxlength="10" value = "<?php echo $username; ?>">
                </div>
            </div>
            <div>
                <label>Password</label>
                <div>
                    <input type = "password"  class = "form-control" name = "user_password" required="required" pattern="[a-zA-Z0-9]+" maxlength="25" value = "<?php echo $user_password; ?>">
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
                <a href="view_user.php" role="button">Cancel</a>
            </div>

        </form>
    </div>
    
</body>
</html>