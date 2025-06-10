<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/jpeg" href="images/Brewngocircle.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body class="smart-footer">

<?php
//login page also function as a logout system
session_start();
if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}
session_destroy();

include('./view/navigation.php');
?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BrewNGo";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['loginID'];
		$password = $_POST['loginPassword'];

		if(!empty($user_name) && !empty($password))
		{
            //make username and passwork case insensitive
            $user_name_case_insen = strtolower($user_name);
            $password_case_insen = strtolower($password);

			//read from database
			$query = "SELECT * FROM users WHERE LOWER(username) = '$user_name_case_insen' limit 1";
			$result = mysqli_query($conn, $query);

            //checking submitted login details with database
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if(strtolower($user_data['user_password']) === $password_case_insen)
					{
                        //setting session id to user so that other pages can reference easier
						$_SESSION['id'] = $user_data['id'];

                        if($user_data['username'] === 'admin') {
                            //takes admin directly to one of admin dashboard pages
                            header("Location: view_enquiry.php");
                            die;
                        } else {
                            //takes regular user back to index page
                            header("Location: index.php");
                            die;
                        }
						
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

    <section class="form-section">
    <h1>Log In</h1>
    <p>Already a member? Log back into your account!</p>
    <aside class="form-section ">
      <h2> Not what you're looking for? </h2>
      <a href='membership.html'>I don't have an account.</a><br>
      <a href='enquiry.html'>I forgot my password.</a>
    </aside>
      <form method="post"> <!-- action="login I guess" -->
                  <fieldset>
                      <legend>Details</legend>
                      <p>
                          <label for="loginID">Username</label><br>
                          <input type="text" name="loginID" id="loginID" required="required" pattern="[a-zA-Z]+" maxlength="10" placeholder="JohnDoe101">
                      </p>
                      <p>
                          <label for="loginPassword">Password</label><br>
                          <input type="password" name="loginPassword" id="loginPassword" required="required" pattern="[a-zA-Z]+" maxlength="25" placeholder="**********">
                      </p>

                  </fieldset>
                  <input type="submit" value="Submit">
                      <input type="reset" value="Reset">
          </form>
    </section>
    </div>

    <?php include('./view/footer.php'); ?>

    <?php include('./view/backtotop.php'); ?>
</body>
</html>
