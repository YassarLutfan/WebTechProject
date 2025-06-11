<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/jpeg" href="images/Brewngocircle.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
  
<?php include('./view/navigation.php'); ?>

    <section class="form-section">
        <h1>Join us!</h1>
        <p>If you want to join our team of brewmasters, fill in your details below.</p>
      <form action="joinusconfirm.php" method="post" enctype="multipart/form-data"> <!-- action="login I guess" -->
                  <fieldset>
                      <input type="hidden" id="formName" name="formName" value="joinus">
                      <legend>Details</legend>
                          <label for="firstName">First Name</label><br>
                          <input type="text" name="firstName" id="firstName" required="required" pattern="[a-zA-Z]+" maxlength="25" placeholder="John">
                      <p>
                          <label for="lastName">Last Name </label><br>
                          <input type="text" name="lastName" id="lastName" required="required" pattern="[a-zA-Z]+" maxlength="25" placeholder="Doe">
                      </p>
                      <p>
                          <label for="email">E-mail Address </label><br>
                          <input type="email" name="email" id="email" required="required" placeholder="example@example.com">
                      </p>
                      <p>
                          <label for="phoneNumber">Phone Number</label><br>
                          <input type="tel" name="phoneNumber" id="phoneNumber" required="required" maxlength="10" placeholder="0144687219">
                      </p>
                      <fieldset>
                          <legend>Address</legend>
                          <p>
                              <label for="addressStreet">Street Address</label><br>
                              <input type="text" name="addressStreet" id="addressStreet" required="required" maxlength="40" placeholder="Address line 1 & 2">
                          </p>
                          <p>
                              <label for="addressCity">City </label><br>
                              <input type="text" name="addressCity" id="addressCity" required="required" maxlength="20" placeholder="Kuching">
                          </p>
                          <p>
                              <label for="addressState">State </label><br>
                              <select name="addressState" id="addressState" required="required">
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
                          </p>
                          <p>
                              <label for="addressPostcode">Postcode </label><br>
                              <input type="number" name="addressPostcode" id="addressPostcode" required="required" max="99999" min="0" placeholder="00000">
                          </p>
                      </fieldset>
                          <label for="resume">Attach your resume</label><br>
                          <div class="form-choice-section">
                          Attached file:
                          <input type="file" name="resume" id="resume" accept=".doc, .docx, .pdf">
                          </div>
                          <label for="appearance">Attach an image of yourself</label><br>
                          <div class="form-choice-section">
                          Attached file:
                          <input type="file" name="appearance" id="appearance" accept="image/*"> <!-- There is no way, to my knowledge, of capping this to 200Kbs without the use of Javascript -->
                          </div>
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
