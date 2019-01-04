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
  <title>HTML Sitemap for Bruce Claypool Photography</title>
  <link rel='stylesheet' href='./styles/nav.css'>
<!-- <script src="scripts/jquery-3.3.1.js" type="text/javascript"></script> -->
  <script src="scripts/jquery-3.3.1-min.js" type="text/javascript"></script>  <script src="./scripts/dropdown.js" type="text/javascript"></script>
</head>
<body>
  <header>
    <div class="header-div-container">
      <?php  include('./includes/nav.php'); ?>
    </div>
  </header>
  <div id='body-container'>
      <div id="h1div"><h1>Sitemap for <span class="bruce-font">Bruce Claypool</span> Photography</h1></div>      
      <section>
      <div class="page-content">
        <div id='left-column'>
            <p>...</p>
        </div>
        <div id='right-column' class="forceCenter">
            <p>...</p>
        </div>
        <div style="width: 100%; height: 40px; display: inline-block; float: none; clear: both;">&nbsp;</div>
      </div>
      </section>
    <?php include('./page-sections/portfolio-jump.php'); ?>
  <?php include('./includes/footer.php'); ?>

  </div>

  
</body>

</html>