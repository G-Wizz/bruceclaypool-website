<?php
$active_page = "about"; // Set active page for menus 
?>
<!DOCTYPE html>
<html>
<head>
  <meta lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>About Bruce Claypool Photography | Natures Beauty Handed to You</title>
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
     <div id="h1div"><h1>About <span class="bruce-font">Bruce Claypool</span> Photography</h1></div>
     <section>
      <div class="page-content">
        <div id='left-column'>
          <p>For more than 25 years <span class='standoutWords'>Bruce Claypool</span> has been exploring the American landscape camera in hand bringing back an immense body of work. Vivid colors, from the deserts of the southwest to the rocky coast of Maine, have been his theme and his passion.</p>

          <p>At the same time another exploration has been taking place in the studio. This one involves extreme close ups of flowers and other natural objects.</p>

          <p>But several things remain constant - purity of color and the beauty of nature. These are subjects that can take a life time to explore. And within these pages we hope to show you some of Bruce's thoughts on these ideas.</p>
        </div>
         <div id='right-column' class="forceCenter">
            <div id="bruce-image">
              <img src="./images/bruce.jpg" width="100%" height="100%" class="imageShadow" alt="">
              <p><span class='standoutWords'>Bruce Claypool</span> shooting large format on location.</p>
            </div>
         </div>
         <div style="width: 100%; height: 40px; display: inline-block; float: none; clear: both;">&nbsp;</div>
      </div>
      </section>
      <?php include('./includes/call-to-action.php'); ?>
      <?php include('./includes/carousel.php'); ?>
  <?php include('./includes/footer.php'); ?>

  </div>

</body>

</html>