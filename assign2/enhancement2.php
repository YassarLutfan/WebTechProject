<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/jpeg" href="images/Brewngocircle.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhancements</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php include('./view/navigation.php'); ?>
    
    <div class="Enhancement - Assignment 2">
        <h1>Enhancements - Assignment 2</h1>

        <section>
            <h2>Job Application Module</h2>
            <h3>Brief discription: </h3>
            <p>Saves the uploaded resume and appearance photo to permanent storage, adding the link to it to the relevant table.</p>
            <h3>Pages applied:</h3>
            <a href="joinus.php">Join Us</a>
	    <h3>How this exceeds the requirements of this assignment:</h3>
            <p>Because this is a critical feature for the Join Us system to function but was not described as necessary within the project requirements.</p>
            <h3>How does a programmer implement this feature in a production environment?</h3>
            <p>Whenever you reboot the server for maintenance, also delete the contents of the "temp" folder in the website root directory. Otherwise, the system works as-is.</p>
            <h3>Resources:</h3>
            <a href="https://www.geeksforgeeks.org/php/copy-the-entire-contents-of-a-directory-to-another-directory-in-php/">Geeks for Geeks - Copy the entire contents of a directory to another directory</a>
        </section>

        <section>
            <h2>User Management Module</h2>
            <h3>Brief description: </h3>
            <p>An interface within the admin dashboard to allow admins to add, edit or delete website database content.</p>
            <h3>Pages applied:</h3>
	    <a href="new_user.php">New User</a><br>
	    <a href="edituser.php">Edit User</a><br>
            <a href="view_user.php">User View</a><br>
	    <a href="new_job.php">New Job</a><br>
            <a href="editjob.php">Edit Job</a><br>
	    <a href="view_job.php">Job View</a><br>
	    <a href="new_membership.php">New Membership</a><br>
            <a href="editmembership.php">Edit Membership</a><br>
	    <a href="view_membership.php">Membership View</a><br>
	    <a href="new_enquiry.php">New Enquiry</a><br>
            <a href="editenquiry.php">Edit Enquiry</a><br>
 	    <a href="view_enquiry.php">Enquiry View</a>
	    <h3>How this exceeds the requirements of this assignment:</h3>
            <p>Because this is a critical feature for administration to function but was not described as necessary within the project requirements.</p>
            <h3>How does a programmer implement this feature in a production environment?</h3>
            <p>The system works as-is.</p>
            <h3>Resources:</h3>
            <a href="https://www.youtube.com/watch?v=ArKrqdQ-oSs">https://www.youtube.com/watch?v=ArKrqdQ-oSs</a>
        </section>

        <section>
            <h2>Admin Authorization Check</h2>
            <h3>Brief discription: </h3>
            <p>Non-privileged users are not permitted to access any admin dashboard, and any admin users who log in are automatically redirected to the admin dashboard instead of the regular website.</p>
            <h3>Pages applied:</h3>
	    <a href="new_user.php">New User</a><br>
	    <a href="edituser.php">Edit User</a><br>
            <a href="view_user.php">User View</a><br>
	    <a href="new_job.php">New Job</a><br>
            <a href="editjob.php">Edit Job</a><br>
	    <a href="view_job.php">Job View</a><br>
	    <a href="new_membership.php">New Membership</a><br>
            <a href="editmembership.php">Edit Membership</a><br>
	    <a href="view_membership.php">Membership View</a><br>
	    <a href="new_enquiry.php">New Enquiry</a><br>
            <a href="editenquiry.php">Edit Enquiry</a><br>
 	    <a href="view_enquiry.php">Enquiry View</a>
	    <h3>How this exceeds the requirements of this assignment:</h3>
            <p>Because this is a critical feature for administration to function but was not described as necessary within the project requirements.</p>
            <h3>How does a programmer implement this feature in a production environment?</h3>
            <p>The system works as-is.</p>
            <h3>Resources:</h3>
            <a href="https://www.youtube.com/watch?v=WYufSGgaCZ8">https://www.youtube.com/watch?v=WYufSGgaCZ8</a>
        </section>        
    </div>

    <?php include('./view/footer.php'); ?>
      
    <?php include('./view/backtotop.php'); ?>
</body>
</html>
