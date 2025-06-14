<?php include('./view/admin_check.php'); ?>

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

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST["username"];
    $user_password = $_POST["user_password"];


    do {
        if (
            empty($username) || empty($user_password) 
        ) {
            $errorMessage = "All fields are required";
            break;
        }

        $sql = "INSERT INTO users(username, user_password)" . 
                    "VALUES('$username', '$user_password')";
        $result = $conn->query($sql);

        if(!$result){
            $errorMessage= "Invalid query: " . $conn->error;
            break;
        }

        $username = "";
        $user_password = "";

        $successMessage = "User Added";

        header("location:view_user.php");
        exit;

    } while(false);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css?v=5">
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