<?php
$active_page = "purchase"; // Set active page for menus 
?>
<!DOCTYPE html>
<html>
<head>
  <meta lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Purchase Photographs by Bruce Claypool | 856-985-7077</title>
  <link rel='stylesheet' href='./styles/nav.css'>
<!-- <script src="scripts/jquery-3.3.1.js" type="text/javascript"></script> -->
  <script src="scripts/jquery-3.3.1-min.js" type="text/javascript"></script>  <script src="./scripts/dropdown.js" type="text/javascript"></script>
  <script src='./scripts/jquery.carouFredSel-6.2.1.js' type='text/javascript'></script>
</head>
<body>
  <header>
    <div class="header-div-container">
      <?php  include('./includes/nav.php'); ?>
    </div>
  </header>
  <div id='body-container'>
      <div id="h1div"><h1>Purchasing Photographs<br /> the <span class="bruce-font">Bruce Claypool</span> Collection</h1></div>      
      <section>
      <div class="page-content">
        <div id='left-column'>
            <p>All prints are custom crafted limited editions. Glicleé prints are created using archival quality Ultrachrome inks – rated to last 100 years without loss of color or clarity. Prints are also available unmounted and can be sized to desired specifications.</p>
            <p>So contact us, we'll work with you to make the print you want to your specifications. We can print to almost any size - up to 44" on the short axis. For example, some of our recent prints have been as large as 44" x 120". That was a 10 ft. long panoramic!</p>
            <p>Smaller prints are available as well as differe</p>
            <h2>Presentation Options</h2>
            <p>Unmounted Prints are available as simple rolled paper. You can provide your own framing and matting.</p>
            <p>Framed We work closely with a framer and provide both mats and frames to your specifications.</p>
            <p>Plexiglas Laminated Perhaps our favorite way to present our work. Images are laminated onto high quality sintra board and then from laminated onto clear plexiglass. This provides not only added protection but creates a very impressive, unique presentation.</p>
        </div>
        <div id='right-column' class="forceCenter">
            <div id="purchase-page-image">
              <img src="./images/purchase-page/le014_web.jpg" width="100%" height="100%" class="imageShadow" alt="">
              <p>Bruce Claypool shooting large format on location.</p>
            </div>
        </div>
        <div style="width: 100%; height: 40px; display: inline-block; float: none; clear: both;">&nbsp;</div>
      </div>
      </section>
      <?php include('./includes/carousel.php'); ?>
  <?php include('./includes/footer.php'); ?>

  </div>

  
</body>

</html>