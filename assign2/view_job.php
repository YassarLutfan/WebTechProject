<?php
// view_job.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BrewNGo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM joinus";  
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Join Us Entries</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<?php include('./view/navigation.php'); ?>

<section class="form-section">
    <h1>Join Us Entries</h1>
    <?php if (mysqli_num_rows($result) > 0): ?>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Street</th>
            <th>City</th>
            <th>State</th>
            <th>Postal Code</th>
            <th>Resume</th>
            <th>Profile Image</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['id']); ?></td>
            <td><?php echo htmlspecialchars($row['firstName']); ?></td>
            <td><?php echo htmlspecialchars($row['lastName']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
            <td><?php echo htmlspecialchars($row['phoneNumber']); ?></td>
            <td><?php echo htmlspecialchars($row['addressStreet']); ?></td>
            <td><?php echo htmlspecialchars($row['addressCity']); ?></td>
            <td><?php echo htmlspecialchars($row['addressState']); ?></td>
            <td><?php echo htmlspecialchars($row['addressPostcode']); ?></td>
            <td><a href="uploads/<?php echo urlencode($row['resume']); ?>" target="_blank">Download</a></td>
            <td><a href="uploads/<?php echo urlencode($row['appearance']); ?>" target="_blank">View</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <?php else: ?>
        <p>No entries found.</p>
    <?php endif; ?>
</section>

<?php mysqli_close($conn); ?>

<?php include('./view/footer.php'); ?>
<?php include('./view/backtotop.php'); ?>
</body>
</html>