<?php

    $firstName       = $_POST['firstName'];
    $lastName        = $_POST['lastName'];
    $email           = $_POST['email'];
    $phoneNumber     = $_POST['phoneNumber'];
    $addressStreet   = $_POST['addressStreet'];
    $addressCity     = $_POST['addressCity'];
    $addressState    = $_POST['addressState'];
    $addressPostcode = $_POST['addressPostcode'];

    // files
    // TODO CURRENTLY UNHANDLED!!!
    $resume    = $_FILES['resume'];
    $appearance = $_FILES['appearance'];
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

        <h2>Please review your form!</h2>
        <p>If everything seems to be in order, click the button to submit.</p>
        <br>

        <?php

            echo "<p><strong>First Name:</strong> $firstName</p>";
            echo "<p><strong>Last Name:</strong> $lastName</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Phone Number:</strong> $phoneNumber</p>";
            echo "<p><strong>Street Address:</strong> $addressStreet</p>";
            echo "<p><strong>City:</strong> $addressCity</p>";
            echo "<p><strong>State:</strong> $addressState</p>";
            echo "<p><strong>Postcode:</strong> $addressPostcode</p>";

            echo "<form action=\"joinus_process.php\" method=\"POST\">
            <input type=\"hidden\" name=\"firstName\" value=\"$firstName\">
            <input type=\"hidden\" name=\"lastName\" value=\"$lastName\">
            <input type=\"hidden\" name=\"email\" value=\"$email\">
            <input type=\"hidden\" name=\"phoneNumber\" value=\"$phoneNumber\">
            <input type=\"hidden\" name=\"addressStreet\" value=\"$addressStreet\">
            <input type=\"hidden\" name=\"addressCity\" value=\"$addressCity\">
            <input type=\"hidden\" name=\"addressState\" value=\"$addressState\">
            <input type=\"hidden\" name=\"addressPostcode\" value=\"$addressPostcode\">";
        ?>
                <input type="submit" value="Confirm">
        </form>

    </section>

    <?php include('./view/footer.php'); ?>

    <?php include('./view/backtotop.php'); ?>

</body>
</html>
