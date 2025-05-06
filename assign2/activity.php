<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/jpeg" href="images/Brewngocircle.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body class="location smart-footer">
    <div class="content">

    <?php include('./view/navigation.php'); ?>

    <section class="Activity-main">
        <h2 class="Activity-title">Welcome to Brew & Go Activities!</h2>
        <p>Check out our latest promotions and events!</p>
    </section>

    <div class="activity-grid">
        <a href="comingsoon.php" class="activity-box">
          <img src="images/coming_soon.jpg" alt="Coming Soon">
          <h2>Coming Soon</h2>
        </a>
        <a href="current.php" class="activity-box">
          <img src="images/current.jpg" alt="Current Activities">
          <h2>Current</h2>
        </a>
        <a href="past.php" class="activity-box">
          <img src="images/past.jpg" alt="Past Activities">
          <h2>Past Activities</h2>
        </a>
    </div>
  
    <aside class="Aside">
        <h3>Brew & Go. Coffee </h3>
        <p>Coffee & Pastries. Start your mornings with us! &#9749;</p>
    </aside>
    </div>

    <?php include('./view/footer.php'); ?>
      
    <?php include('./view/backtotop.php'); ?>
</body>
</html>
