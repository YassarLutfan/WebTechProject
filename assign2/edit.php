<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BrewNGo";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$first_name = "";
$last_name = "";
$email = "";
$street_adress = "";
$city = "";
$malaysia_state = "";
$postcode = "";
$phone_number = "";
$enquiry_type = "";
$enquiry = "";
$reg_date = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(!isset($_GET["id"])){
        header("location:view_enquiry.php");
        exit;
    }

    $id = $_GET["id"];

    $sql = "SELECT * FROM enquiry WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location:view_enquiry.php");
        exit;
    }

    $first_name = $row["first_name"];
    $last_name = $row["last_name"];
    $email = $row["email"];
    $street_adress = $row["street_adress"];
    $city = $row["city"];
    $malaysia_state = $row["malaysia_state"];
    $postcode = $row["postcode"];
    $phone_number = $row["phone_number"];
    $enquiry_type = $row["enquiry_type"];
    $enquiry = $row["enquiry"];
}
else{
    $id = $_POST["id"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $street_adress = $_POST["street_adress"];
    $city = $_POST["city"];
    $malaysia_state = $_POST["malaysia_state"];
    $postcode = $_POST["postcode"];
    $phone_number = $_POST["phone_number"];
    $enquiry_type = $_POST["enquiry_type"];
    $enquiry = $_POST["enquiry"];

    do{
        if (
            empty($first_name) || empty($last_name) || empty($email) ||
            empty($street_adress) || empty($city) || empty($malaysia_state) ||
            empty($postcode) || empty($phone_number) || empty($enquiry_type) ||
            empty($enquiry) 
        ) {
            $errorMessage = "All fields are required";
            break;
        }

        $sql = "UPDATE enquiry " . 
               "SET first_name = '$first_name', last_name = '$last_name', email = '$email', street_adress = '$street_adress', city = '$city', malaysia_state = '$malaysia_state', postcode = '$postcode', phone_number = '$phone_number', enquiry_type = '$enquiry_type', enquiry = '$enquiry'" . 
               "WHERE id = $id";

        $result = $conn->query($sql);

        if(!$result){
            $errorMessage = "Invalid query: " . $conn->error;
            break;
        }

        $successMessage = "Enquiry successfully updated";

        header("location: view_enquiry.php");
        exit;

    }while(false);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css?v=4">
    <title>New Enquiry</title>
</head>

<body class = "viewcontainer">
    <div>
        <h2>New Enquiry</h2>
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
                    <input type = "email"  class = "form-control" name = "email" required="required" placeholder="example@example.com" value = "<?php echo $email; ?>">
                </div>
            </div>
            <div>
                <label>Street Address</label>
                <div>
                    <input type = "text"  class = "form-control" name = "street_adress" required="required" maxlength="40" value = "<?php echo $street_adress; ?>">
                </div>
            </div>
            <div>
                <label>City</label>
                <div>
                    <input type = "text"  class = "form-control" name = "city" required="required" maxlength="20" value = "<?php echo $city; ?>">
                </div>
            </div>
            <div>
                <label>Malysia State</label>
                <div>
                    <select name="malaysia_state" class="form-control" required="required">
                    <option value="">Choose one...</option>
                    <option value="Johor" <?php if ($malaysia_state == 'Johor') echo 'selected'; ?>>Johor</option>
                    <option value="Kedah" <?php if ($malaysia_state == 'Kedah') echo 'selected'; ?>>Kedah</option>
                    <option value="Kelantan" <?php if ($malaysia_state == 'Kelantan') echo 'selected'; ?>>Kelantan</option>
                    <option value="Malacca" <?php if ($malaysia_state == 'Malacca') echo 'selected'; ?>>Malacca</option>
                    <option value="Negeri Sembilan" <?php if ($malaysia_state == 'Negeri Sembilan') echo 'selected'; ?>>Negeri Sembilan</option>
                    <option value="Pahang" <?php if ($malaysia_state == 'Pahang') echo 'selected'; ?>>Pahang</option>
                    <option value="Penang" <?php if ($malaysia_state == 'Penang') echo 'selected'; ?>>Penang</option>
                    <option value="Perak" <?php if ($malaysia_state == 'Perak') echo 'selected'; ?>>Perak</option>
                    <option value="Perlis" <?php if ($malaysia_state == 'Perlis') echo 'selected'; ?>>Perlis</option>
                    <option value="Selangor" <?php if ($malaysia_state == 'Selangor') echo 'selected'; ?>>Selangor</option>
                    <option value="Terengganu" <?php if ($malaysia_state == 'Terengganu') echo 'selected'; ?>>Terengganu</option>
                    <option value="Sabah" <?php if ($malaysia_state == 'Sabah') echo 'selected'; ?>>Sabah</option>
                    <option value="Sarawak" <?php if ($malaysia_state == 'Sarawak') echo 'selected'; ?>>Sarawak</option>
                    <option value="Kuala Lumpur" <?php if ($malaysia_state == 'Kuala Lumpur') echo 'selected'; ?>>Kuala Lumpur</option>
                    <option value="Labuan" <?php if ($malaysia_state == 'Labuan') echo 'selected'; ?>>Labuan</option>
                    <option value="Putrajaya" <?php if ($malaysia_state == 'Putrajaya') echo 'selected'; ?>>Putrajaya</option>
                    </select>

                </div>
            </div>
            <div>
                <label>Post Code</label>
                <div>
                    <input type = "number"  class = "form-control" required="required" max="99999" min="0" placeholder="00000" name = "postcode" value = "<?php echo $postcode; ?>">
                </div>
            </div>
            <div>
                <label>Phone Number</label>
                <div>
                    <input type = "tel"  class = "form-control" required="required" maxlength="10"name = "phone_number" value = "<?php echo $phone_number; ?>">
                </div>
            </div>
            <div>
                <label>Enquiry Type</label>
                <div>
                        <select required="required" class="form-control" name="enquiry_type" value = "<?php echo $enquiry_type; ?>">
                                    <option value="">Choose one...</option>
                                    <option value="membership" <?php if ($enquiry_type == 'membership') echo 'selected'; ?>>Membership</option>
                                    <option value="products" <?php if ($enquiry_type == 'products') echo 'selected'; ?>>Products</option>
                                    <option value="business" <?php if ($enquiry_type == 'business') echo 'selected'; ?>>Business</option>
                                    <option value="popup" <?php if ($enquiry_type == 'popup') echo 'selected'; ?>>Pop-up Market</option>
                                    <option value="other" <?php if ($enquiry_type == 'other') echo 'selected'; ?>>Other</option>
                        </select>

                </div>
            </div>
            <div>
                <label>Enquiry</label>
                <div>
                    <textarea name="enquiry" class="form-control" required="required" rows="4" cols="100" placeholder="What's on your mind?"><?php echo $enquiry; ?></textarea><br>
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
                <a href="view_enquiry.php" role="button">Cancel</a>
            </div>

        </form>
    </div>
    
</body>
</html>