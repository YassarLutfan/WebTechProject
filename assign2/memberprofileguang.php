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
                <img src="images/guang_potrait.jpg" alt="Guan">
            </div>
            <div class="theback">
                <img class="profile-img" src="images/guang_potrait.jpg" alt="Guan">
                <h3 class="profile-name">Ang Guan Xiang</h3>
                <p class="profile-id">104404981</p>
                <p class="profile-course">Bachelor of Computer Science</p>
        
                <table class="profile-info">
                    <tr>
                        <th>Demographic:</th>
                        <td>I come from a family of five and I have two sisters.</td>
                    </tr>
                    <tr>
                        <th>Hometown:</th>
                        <td>Johor, Malaysia</td>
                    </tr>
                    <tr>
                        <th>Great Achievement:</th>
                        <td>One of my proudest achievements is obtaining ABRSM Grade 4 in Piano, which reflects my dedication and passion for music.</td>
                    </tr>
                    <tr>
                        <th>Favorites:</th>
                        <td>Games: Identity V – I enjoy strategic and immersive gameplay, and Identity V allows me to experience both while also connecting with friends online.</td>
                    </tr>
                </table>
        
                <a href="mailto:104404981@students.swinburne.edu.my" class="email-link" title="Email Me">
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
