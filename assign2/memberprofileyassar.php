<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/jpeg" href="images/Brewngocircle.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

  <?php include('./view/navigation.php'); ?>

    <div class="center-wrapper">
    <div class="profile-container">
        <div class="thecard">
            <div class="thefront">
                <img src="images/YassarPotrait.jpg" alt="Edmund">
            </div>
            <div class="theback">
                <img class="profile-img" src="images/YassarPotrait.jpg" alt="Edmund">
                <h3 class="profile-name">Yassar Lutfan bin Yusuf</h3>
                <p class="profile-id">101233904</p>
                <p class="profile-course">Bachelor of Computer Science: Software Development</p>
        
                <table class="profile-info">
                    <tr>
                        <th>Demographic:</th>
                        <td>Muslim, Malaysian, aged 20-30</td>
                    </tr>
                    <tr>
                        <th>Hometown:</th>
                        <td>Kuantan, Pahang</td>
                    </tr>
                    <tr>
                        <th>Great Achievement:</th>
                        <td>Worked on the Triple-i Initiative</td>
                    </tr>
                    <tr>
                        <th>Favorites:</th>
                        <td>Games: Rabi-Ribi<br>Books: Half Moon Investigations</td>
                    </tr>
                </table>
        
                <a href="mailto:101233904@students.swinburne.edu.my" class="email-link" title="Email Me">
                    <img src="images/mail.png" alt="Email Icon">
                </a>
            </div>
        </div>
    </div>
    </div>
       

    <?php include('./view/footer.php'); ?>
      
    <?php include('./view/backtotop.php'); ?>
</body>
</html>
