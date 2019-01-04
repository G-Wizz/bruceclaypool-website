<?php
$active_page = "home"; // Set active page for menus 
?>
<!DOCTYPE html>
<html>
<head>
  <meta lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<meta http-equiv="X-UA-Compatible" content="ie=edge">-->
  <title>Bruce Claypool Photography | 856-985-7077 | 9am to 5pm EST</title>
  <link rel='stylesheet' href='./styles/nav.css'>
<!-- <script src="scripts/jquery-3.3.1.js" type="text/javascript"></script> -->
  <script src="scripts/jquery-3.3.1-min.js" type="text/javascript"></script>
  <script src="./scripts/dropdown.js" type="text/javascript"></script>
  <!-- <script src="./scripts/slider.js" type="text/javascript"></script> -->
  <link href="https://fonts.googleapis.com/css?family=Barlow|Heebo|Josefin+Sans|Old+Standard+TT|Quicksand|Raleway" rel="stylesheet">
</head>
<body>
  <header>
    <div class="header-div-container">
      <?php  include('./includes/nav.php'); ?>
    </div>
  </header>
  <div id='body-container'>
    <div id="h1div"><h1>Welcome to <span class="bruce-font">Bruce Claypool</span> Photography</h1></div>
    <section>
<?php include('includes/slideshow-fader.php'); ?>
        <!--
    <div id="main-img">
      <img src="./images/home-image.jpg" alt="">
      </div>
-->
    </section>
    <div id='content-area'>
    <section>
      
      <div id='left-column'>
        <p>We're happy to welcome you to our virtual gallery! Inside these pages you can explore the works of <span class='standoutWords'>Bruce Claypool</span>, photographer. Please enjoy the experience of touring through our portfolios.</p>

        <p><span class='standoutWords'>Bruce Claypool</span> has been exploring both photographic possibilities and the American countryside for over thirty years. During this time he has amassed an impressive body of work. Much of this is focused on his favorite subject: the American landscape, although you will find many examples of recent studio photos.</p>

        <p>Come back and visit this site often. Bruce has been very busy with new works shot locally in New Jersey and with images taken during a recent shoot in the Outer Banks of North Carolina. New images will be posted as soon as they're available.</p>

        <p>All photos shown within these pages are for sale. Please feel free to contact us for further information about adding anything you see to your collection, or just to let us know what you think. We look forward to hearing from you!</p>
      </div>
    </section>
      <!-- // // -->
      <section>
      <div id='right-column'>
        <div ><p>We're happy to welcome you to our virtual gallery! Inside these pages you can explore the works of <span class='standoutWords'>Bruce Claypool</span>, photographer. Please enjoy the experience of touring through our portfolios.</p>
        <p><span class='standoutWords'>Bruce Claypool</span> has been exploring both photographic possibilities and the American countryside for over thirty years. During this time he has amassed an impressive body of work. Much of this is focused on his favorite subject: the <a href='lightbox-photography-portfolio.php'>American landscape</a>, although you will find many examples of recent studio photos.</p>
        </div>
        <div style="padding-top: 35px;">
          <img src="images/home/misc007-home-side.jpg" max-width="240" height="360" class="imageShadow" alt=""/>
        </div>
      </div>
      <div style="width: 100%; height: 40px; clear: both;">&nbsp;</div>
    </section>
      </div>
      <?php include('./includes/call-to-action.php'); ?>
    <?php include('./page-sections/portfolio-jump.php'); ?>
  <?php include('./includes/footer.php'); ?>
  </div>
</body>

</html>