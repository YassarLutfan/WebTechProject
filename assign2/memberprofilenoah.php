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
                <img src="images/NoahPotrait.jpg" alt="Edmund">
            </div>
            <div class="theback">
                <img class="profile-img" src="images/NoahPotrait.jpg" alt="Edmund">
                <h3 class="profile-name">Noah Ding Ka TING</h3>
                <p class="profile-id">104403881</p>
                <p class="profile-course">Bachelor of Computer Science</p>
        
                <table class="profile-info">
                    <tr>
                        <th>Demographic:</th>
                        <td>I'm a Chinese Malaysian, that is the youngest of four siblings.</td>
                    </tr>
                    <tr>
                        <th>Hometown:</th>
                        <td>Born and raised in Sibu, Sarawak. Sibu is a medium sized town with lots of different types of food. Other than food Sibu is famous for its old town aesthetic, nature, and wildlife.</td>
                    </tr>
                    <tr>
                        <th>Great Achievement:</th>
                        <td>My greatest achievement is being able to live a life that I want even if I don't walk the same paths as others take to get there. Such as how that I was homeschooled and still have achieved a good academic scores of a 3.81 CGPA.</td>
                    </tr>
                    <tr>
                        <th>Favorites:</th>
                        <td>Book - Nancy Drew, Music - A Taste of Honey, Movie - Lawrance of Arabia, Games - Harvest Moon: Friends of Mineral Town</td>
                    </tr>
                </table>
        
                <a href="mailto:104403881@students.swinburne.edu.my" class="email-link" title="Email Me">
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
