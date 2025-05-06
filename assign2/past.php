<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/jpeg" href="images/Brewngocircle.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Past Activities</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body class="location">

    <?php include('./view/navigation.php'); ?>

    <section class="Activity-main">
      <h1>Past Activities</h1>
    </section>
    <div class="activity-grid">
      <!-- 原有活动卡（保留前两项） -->
      <div class="activity-card">
        <figure>
          <img src="images/past1.jpg" alt="past1" />
          <figcaption>March Promotion at Plaza Merdeka</figcaption>
        </figure>
        <h3>Get a Free Drink</h3>
        <p>Top up RM50 and receive a FREE drink + RM10 voucher!</p>
        <dl>
          <dt>Time</dt>
          <dd>March 1 - March 31, 2025</dd>
          <dt>Outlet</dt>
          <dd>Plaza Merdeka</dd>
          <dt>Reward</dt>
          <dd>1 free drink + RM10 voucher</dd>
        </dl>
      </div>

      <div class="activity-card">
        <figure>
          <img src="images/past2.jpg" alt="past2" />
          <figcaption>Grand Opening</figcaption>
        </figure>
        <h3>Join us as we mark our new chapter</h3>
        <p>Lion dance performance and fun lucky draw games!</p>
        <dl>
          <dt>Time</dt>
          <dd>2nd February 2025, Saturday at 10.30am</dd>
          <dt>Outlet</dt>
          <dd>Plaza Merdeka</dd>
        </dl>
      </div>

      <div class="activity-card">
        <figure>
          <img src="images/past3.jpg" alt="past3" />
          <figcaption>Free Oranges</figcaption>
        </figure>
        <h3>Redeem free oranges</h3>
        <p>purchase 2 drinks & more</p>
        <dl>
          <dt>Time</dt>
          <dd>aturday 25/1 and while stocks last.</dd>
        </dl>
      </div>

      <div class="activity-card">
        <figure>
          <img src="images/past4.jpg" alt="past4" />
          <figcaption>Kuching Christmas Bazaar</figcaption>
        </figure>
        <h3>Participating Brand : @brewngo.coffee </h3>
        <p>J#KuchingChristmasBazaar #PetFriendlyMarket #traviliongroup #kiamarket</p>
        <dl>
          <dt>Time</dt>
          <dd>December 19 - December 22, 5pm-10pm(Weekday) & 10am-10pm(Weekend)</dd>
          <dt>Outlet</dt>
          <dd>Travilion Group (Jln Padungan)</dd>
        </dl>
      </div>

      <div class="activity-card">
        <figure>
          <img src="images/past5.jpg" alt="past5" />
          <figcaption>Cheers to the season</figcaption>
        </figure>
        <h3>#kuching #kuchingsarawak #kuchingfoodie #kuchingcafe</h3>
        <p>Sip into the holiday spirit with our Christmas special beverage, crafted to warm your heart and brighten your celebrations.</p>
        <dl>
          <dt>Time</dt>
          <dd>28/11 to 31/12</dd>
        </dl>
      </div>

      <div class="activity-card">
        <figure>
          <img src="images/past6.jpg" alt="past6" />
          <figcaption>Order from us on Grabfood</figcaption>
        </figure>
        <h3>Grab Food</h3>
        <p>Lazy to go out? Order from us on Grabfood and get it delivered right at your door step! </p>
        <dl>
          <dt>Time</dt>
          <dd>1-30 September</dd>
        </dl>
      </div>

    </div>

    <div>
      <a class="back-button" href="Activity.php">&larr; Back to Home</a>
   </div>
    
    <aside class="Aside">
      <h3>Brew & Go. Coffee</h3>
      <p>Coffee & Pastries. Start your mornings with us! &#9749;</p>
    </aside>

    <?php include('./view/footer.php'); ?>
      
    <?php include('./view/backtotop.php'); ?>
</body>
</html>
