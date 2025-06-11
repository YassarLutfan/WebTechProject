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
	    <a href="#">New User</a><br>
	    <a href="#">Edit User</a><br>
            <a href="#">User View</a><br>
	    <a href="#">New Job</a><br>
            <a href="#">Edit Job</a><br>
	    <a href="#">Job View</a><br>
	    <a href="#">New Membership</a><br>
            <a href="#">Edit Membership</a><br>
	    <a href="#">Membership View</a><br>
	    <a href="#">New Enquiry</a><br>
            <a href="#">Edit Enquiry</a><br>
 	    <a href="#">Enquiry View</a>
	    <h3>How this exceeds the requirements of this assignment:</h3>
            <p>This adds more functionality for the website for the admin, so that the website also serves as a way for the owners or other authorised personnel to interact the website database content.</p>
            <h3>How does a programmer implement this feature in a production environment?</h3>
            <p>When adding, a form will appear where the admin can fill to add to the database, when editing the information on the selected row will be put into a form where the admin can edit and resubmit, when deleting the seleted row will be deleted.</p>
            <h3>Resources:</h3>
            <a href="https://www.youtube.com/watch?v=NqP0-UkIQS4">https://www.youtube.com/watch?v=NqP0-UkIQS4</a>
        </section>

        <section>
            <h2>Admin Authorization Check</h2>
            <h3>Brief discription: </h3>
            <p>Non-privileged users are not permitted to access any admin dashboard will be redirected to index page.</p>
            <h3>Pages applied:</h3>
	    <a href="#">New User</a><br>
	    <a href="#">Edit User</a><br>
            <a href="#">User View</a><br>
	    <a href="#">New Job</a><br>
            <a href="#">Edit Job</a><br>
	    <a href="#">Job View</a><br>
	    <a href="#">New Membership</a><br>
            <a href="#">Edit Membership</a><br>
	    <a href="#">Membership View</a><br>
	    <a href="#">New Enquiry</a><br>
            <a href="#">Edit Enquiry</a><br>
 	    <a href="#">Enquiry View</a>
	    <h3>How this exceeds the requirements of this assignment:</h3>
            <p>The thought of the security of the website was considered when developing this enhancement.</p>
            <h3>How does a programmer implement this feature in a production environment?</h3>
            <p>check the current visitor on this page have the correct priviages, otherwise send them to the index page.</p>
            <h3>Resources:</h3>
            <a href="https://www.youtube.com/watch?v=WYufSGgaCZ8">https://www.youtube.com/watch?v=WYufSGgaCZ8</a>
        </section>        
    </div>

    <?php include('./view/footer.php'); ?>
      
    <?php include('./view/backtotop.php'); ?>
</body>
</html>
