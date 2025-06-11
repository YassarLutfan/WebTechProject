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
$phoneNumber = $_POST['phoneNumber'];
$addressStreet = $_POST['addressStreet'];
$addressCity = $_POST['addressCity'];
$addressState = $_POST['addressState'];
$addressPostcode = intval($_POST['addressPostcode']);
$filepath = $_POST['filepath'];

// handling folder transfer
$folder = substr($filepath, 5);
$permanentpath = "local_storage/" . $folder;

// adapted from geeksforgeeks
function custom_copy($src, $dst) { 

    // open the source directory
    $dir = opendir($src); 

    // Make the destination directory if not exist
    @mkdir($dst); 

    // Loop through the files in source directory
    while( $file = readdir($dir) ) { 

        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) 
            { 

                // Recursively calling custom copy function
                // for sub directory 
                custom_copy($src . '/' . $file, $dst . '/' . $file); 
            } 
            else { 
                copy($src . '/' . $file, $dst . '/' . $file);
		unlink($src . '/' . $file); 
            } 
        } 
    } 
    closedir($dir);
    rmdir($src);
} 

custom_copy($filepath, $permanentpath);

$sql = "INSERT IGNORE INTO join_us (
    first_name,
    last_name,
    email,
    phone_number,
    street_adress,
    city,
    malaysia_state,
    postcode,
    filepath,
    reg_date
    ) VALUES (
        '$firstName',
        '$lastName',
        '$email',
        '$phoneNumber',
        '$addressStreet',
        '$addressCity',
        '$addressState',
        '$addressPostcode',
        '$permanentpath',
        NOW()
        )";


if (!mysqli_query($conn, $sql)) {
    echo "Error: " . mysqli_error($conn);
}

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

        <h2>Thanks for your interest!</h2>

    </section>

    <?php include('./view/footer.php'); ?>

    <?php include('./view/backtotop.php'); ?>

</body>
</html>
