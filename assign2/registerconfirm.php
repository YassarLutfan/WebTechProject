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
};

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$loginID = $_POST['loginID'];
$loginPassword = $_POST['loginPassword'];

$sql1 = "SELECT email FROM users WHERE email = ?";
$stmt = mysqli_prepare($conn, $sql1);

mysqli_stmt_bind_param($stmt, "s", $email);

// Execute the query
mysqli_stmt_execute($stmt);

// Store result
mysqli_stmt_store_result($stmt);

if (mysqli_stmt_num_rows($stmt) > 0) {
    echo "Email already exists.";
} else {
    echo "Email is available.";
}

mysqli_stmt_close($stmt);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/jpeg" href="images/Brewngocircle.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body class="smart-footer">

<?php include('./view/navigation.php'); ?>

    <section class="form-section">

        <h2>Please review your form!</h2>
        <p>If everything seems to be in order, click the button to submit.</p>
        <br>

        <?php
            echo "<p><strong>First Name:</strong> $firstName</p>";
            echo "<p><strong>Last Name:</strong> $lastName</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Login ID:</strong> $loginID</p>";

            echo "<form action=\"register_process.php\" method=\"POST\">
            <input type=\"hidden\" name=\"firstName\" value=\"$firstName\">
            <input type=\"hidden\" name=\"lastName\" value=\"$lastName\">
            <input type=\"hidden\" name=\"email\" value=\"$email\">
            <input type=\"hidden\" name=\"loginID\" value=\"$loginID\">
            <input type=\"hidden\" name=\"loginPassword\" value=\"$loginPassword\">";
        ?>
                <input type="submit" value="Confirm">
        </form>

    </section>

    <?php include('./view/footer.php'); ?>

    <?php include('./view/backtotop.php'); ?>

</body>
</html>
