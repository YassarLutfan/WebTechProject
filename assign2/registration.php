<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/jpeg" href="images/Brewngocircle.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body class="smart-footer">
  
<?php include('./view/navigation.php'); ?>



    <section class="form-section">
    <h1>Become a member!</h1>
    <p>Register as a member to get notifications on our latest deals and a discount on all purchases. It's that simple!</p>
    <aside class="form-section">
      <h2> Important! </h2>
      <p> Once you become a member, you'll need to make an initial top-up of either RM30, RM50, RM100 or RM200 to begin enjoying the perks.<br>
      You can top-up using the following DuitNow QR code.</p>
      <img src='images/brewngoduitnow.png' alt="A DuitNow QR code for Brew & Go.">
      <h2> Not what you're looking for? </h2>
      <a href='login.html'><p>I already have an account.</p></a>
    </aside>
      <form action="registerconfirm.php" method="post">
                  <input type="hidden" id="formName" name="formName" value="membership">
                  <fieldset>
                      <legend>Details</legend>
                      <p>
                          <label for="firstName">First Name</label><br>
                          <input type="text" name="firstName" id="firstName" required="required" pattern="[a-zA-Z]+" maxlength="25" placeholder="John">
                      </p>
                      <p>
                          <label for="lastName">Last Name</label><br>
                          <input type="text" name="lastName" id="lastName" required="required" pattern="[a-zA-Z]+" maxlength="25" placeholder="Doe">
                      </p>
                      <p>
                          <label for="email">E-mail Address</label><br>
                          <input type="email" name="email" id="email" required="required" placeholder="example@example.com">
                      </p>
                      <p>
                          <label for="loginID">Username</label><br>
                          <input type="text" name="loginID" id="loginID" required="required" pattern="[a-zA-Z]+" maxlength="10" placeholder="JohnDoe101">
                      </p>
                      <p>
                          <label for="loginPassword">Password</label><br>
                          <input type="password" name="loginPassword" id="loginPassword" required="required" maxlength="25" placeholder="**********">
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
