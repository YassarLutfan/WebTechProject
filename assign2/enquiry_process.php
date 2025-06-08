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
$addressStreet = $_POST['addressStreet'];
$addressCity = $_POST['addressCity'];
$addressState = $_POST['addressState'];
$addressPostcode = intval($_POST['addressPostcode']);
$phoneNumber = $_POST['phoneNumber'];
$enquiryType = $_POST['enquiry'];
$enquiryText = $_POST['enquiryText'];

$sql = "INSERT IGNORE INTO enquiry (
    first_name,
    last_name,
    email,
    street_adress,
    city,
    malaysia_state,
    postcode,
    phone_number,
    enquiry_type,
    enquiry,
    reg_date
    ) VALUES (
        '$firstName',
        '$lastName',
        '$email',
        '$addressStreet',
        '$addressCity',
        '$addressState',
        '$addressPostcode',
        '$phoneNumber',
        '$enquiryType',
        '$enquiryText',
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
