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
                <img src="images/EdmundPotrait.jpg" alt="Edmund">
            </div>
            <div class="theback">
                <img class="profile-img" src="images/EdmundPotrait.jpg" alt="Edmund">
                <h3 class="profile-name">Edmund Yu Guo Qian</h3>
                <p class="profile-id">104405146</p>
                <p class="profile-course">Bachelor of Computer Science</p>
        
                <table class="profile-info">
                    <tr>
                        <th>Demographic:</th>
                        <td>I come from a family of four, including one younger brother and one older sister.</td>
                    </tr>
                    <tr>
                        <th>Hometown:</th>
                        <td>Kota Kinabalu, Malaysia</td>
                    </tr>
                    <tr>
                        <th>Great Achievement:</th>
                        <td>I play a Chinese instrument called the Erhu. I'm currently at Grade 4 and used to perform frequently both in and outside of school during high school.</td>
                    </tr>
                    <tr>
                        <th>Favorites:</th>
                        <td>Games: Arknights<br>Music: JP/Chinese Orchestra music</td>
                    </tr>
                </table>
        
                <a href="mailto:104405146@students.swinburne.edu.my" class="email-link" title="Email Me">
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
