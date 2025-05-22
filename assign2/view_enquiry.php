<?php
// view_enquiry.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BrewNGo";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM enquiry";  
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Enquiries</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<?php include('./view/navigation.php'); ?>

<section class="form-section">
    <h1>Enquiries</h1>
    <?php if (mysqli_num_rows($result) > 0): ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['id']); ?></td>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
            <td><?php echo htmlspecialchars($row['subject']); ?></td>
            <td><?php echo nl2br(htmlspecialchars($row['message'])); ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <?php else: ?>
        <p>No enquiries found.</p>
    <?php endif; ?>
</section>

<?php mysqli_close($conn); ?>

<?php include('./view/footer.php'); ?>
<?php include('./view/backtotop.php'); ?>
</body>
</html>