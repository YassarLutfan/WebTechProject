<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/jpeg" href="images/Brewngocircle.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find A Location</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body class="location smart-footer">
    <div class="content">
    <?php include('./view/navigation.php'); ?>

    <section class="map-section">
        <h2>Our Locations</h2>
    
        <div class="tabs">
            <input type="radio" name="location" id="tab1" checked>
            <label for="tab1">One Jaya</label>
    
            <input type="radio" name="location" id="tab2">
            <label for="tab2">Plaza Merdeka</label>
    
            <div class="map" id="content1">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.402954073208!2d110.36333687458772!3d1.5178484610136245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fba7003da964cb%3A0xf8d14c19ed1634a4!2sBrew%20and%20Go!5e1!3m2!1sen!2smy!4v1744220296843!5m2!1sen!2smy"
                    style="width: 100%; height: 450px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
    
            <div class="map" id="content2">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.3324674093433!2d110.3414420745876!3d1.5585795608701782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fba7ee0ea57329%3A0x104e8cca7140a048!2sPlaza%20Merdeka!5e1!3m2!1sen!2smy!4v1744220544735!5m2!1sen!2smy"
                    style="width: 100%; height: 450px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
    </div>

    <?php include('./view/footer.php'); ?>
      
    <?php include('./view/backtotop.php'); ?>
</body>
</html>
