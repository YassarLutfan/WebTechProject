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

<?php include('./view/navigation.php'); ?>

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
