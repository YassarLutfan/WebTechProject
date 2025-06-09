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
$phone_number = "";
$street_adress = "";
$city = "";
$malaysia_state = "";
$postcode = "";
$reg_date = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $street_adress = $_POST["street_adress"];
    $city = $_POST["city"];
    $malaysia_state = $_POST["malaysia_state"];
    $postcode = $_POST["postcode"];
    $reg_date = date("Y-m-d H:i:s"); // e.g., 2025-06-08 14:37:25


    do {
        if (
            empty($first_name) || empty($last_name) || empty($email) || empty($phone_number) ||
            empty($street_adress) || empty($city) || empty($malaysia_state) ||
            empty($postcode) || empty($reg_date)
        ) {
            $errorMessage = "All fields are required";
            break;
        }

        $sql = "INSERT INTO join_us(first_name, last_name, email, phone_number, street_adress, city, malaysia_state, postcode, reg_date)" . 
                    "VALUES('$first_name', '$last_name', '$email', '$phone_number', '$street_adress', '$city', '$malaysia_state', '$postcode', '$reg_date')";
        $result = $conn->query($sql);

        if(!$result){
            $errorMessage= "Invalid query: " . $conn->error;
            break;
        }
        $first_name = "";
        $last_name = "";
        $email = "";
        $phone_number = "";
        $street_adress = "";
        $city = "";
        $malaysia_state = "";
        $postcode = "";
        $reg_date = "";

        $successMessage = "Application Added";

        header("location:view_job.php");
        exit;

    } while(false);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css?v=4">
    <title>New Application</title>
</head>

<body class = "viewcontainer">
    <div>
        <h2>New Application</h2>
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
                <label>Phone Number</label>
                <div>
                    <input type = "tel"  class = "form-control" required="required" maxlength="10"name = "phone_number" value = "<?php echo $phone_number; ?>">
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
                    <select name="malaysia_state" class = "form-control" required="required" value = "<?php echo $malaysia_state; ?>">
                                  <option value="">Choose one...</option>
                                  <!-- The values are the state's area codes, also, specification requires Federal Territories as well -->
                                  <option value="Johor">Johor</option>
                                  <option value="Kedah">Kedah</option>
                                  <option value="Kelantan">Kelantan</option>
                                  <option value="Malacca">Malacca</option>
                                  <option value="Negeri Sembilan">Negeri Sembilan</option>
                                  <option value="Pahang">Pahang</option>
                                  <option value="Penang">Penang</option>
                                  <option value="Perak">Perak</option>
                                  <option value="Perlis">Perlis</option>
                                  <option value="Selangor">Selangor</option>
                                  <option value="Terengganu">Terengganu</option>
                                  <option value="Sabah">Sabah</option>
                                  <option value="Sarawak">Sarawak</option>
                                  <option value="Kuala Lumpur">Kuala Lumpur</option>
                                  <option value="Labuan">Labuan</option>
                                  <option value="Putrajaya">Putrajaya</option>
                              </select>
                </div>
            </div>
            <div>
                <label>Post Code</label>
                <div>
                    <input type = "number"  class = "form-control" required="required" max="99999" min="0" placeholder="00000" name = "postcode" value = "<?php echo $postcode; ?>">
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
                <a href="view_job.php" role="button">Cancel</a>
            </div>

        </form>
    </div>
    
</body>
</html>