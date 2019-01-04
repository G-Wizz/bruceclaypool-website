<?php
$active_page = "portfolios"; // Set active page for menus
//
// Get Variables : category, display, page
if(isset($_GET['category'])) {
	$cat = $_GET['category'];
} else {
	$cat = 'default';
}
if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 1; // default to page 1
}
if(isset($_GET['display'])) {
	$displayCount = $_GET['display'];
} else {
	$displayCount = 20; // default to 10 per page/
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bruce Claypool Photography - Lightbox Photo Gallery - Portfolio</title>
  <link rel='stylesheet' href='./styles/nav.css'>
<!-- <script src="scripts/jquery-3.3.1.js" type="text/javascript"></script> -->
  <script src="scripts/jquery-3.3.1-min.js" type="text/javascript"></script>
  <script src="scripts/dropdown.js" type="text/javascript"></script>
  <script src="scripts/portfolio.js" type="text/javascript"></script>
</head>
<body>

<div id='lightbox-background'>
</div>

<div id='lightbox-image'>
    <div id='lightbox-content'>
      <div id='close' >&times;</div>
      <img id="lImg" src="" alt="">
    </div>
</div>

  <header>
    <div class="header-div-container">
      <?php include('./includes/nav.php'); ?>
    </div>
  </header>
  <div class="content-section" style="height: auto; min-height: 800px; background-color: #808080;">
    <div class="portfolio-top"><h1><span id="categoryTitle" >&nbsp;</span></h1></div>
    <!-- Left Section -->
    <div class="portfolio-left">
        <!-- Left section items -->
        <div style="width: 100%; height: 40px; background-color: #999999; color: #ffffff; margin-top: -22px; text-transform: uppercase; line-height: 40px; letter-spacing: 2px;"><h4><span class="mobile-font">Portfolio Selection</span></h4></div>
        <div id="catMenu" data-current="<?php echo $cat; ?>" style="width: 100%;">&nbsp;</div>
        <div style="width: 100%; height: 10px; background-color: #999999; color: #ffffff; text-transform: uppercase; line-height: 40px; letter-spacing: 2px;">&nbsp;</div>
      <!-- Dropdown portfolio menu -->
        <div class='port-dropdown'>
            <select id="pSelect" value="Portfolio Selection" class="selectPortfolio">
                <option value="1" class="selectOption">Western Landscapes</option>
                <option value="2" class="selectOption">Eastern Landscapes</option>
                <option value="3" class="selectOption">Seascapes</option>
            </select>
 <!--       <button onclick='portDropdownHandler()' class='port-dropdown-btn'>Portfolios</button>
          <div class='port-dropdown-content'>
            <a href="">1Western Landscapes</a>
            <a href="">Eastern Landscapes</a>
            <a href="">Seascapes</a>
            <a href="">Panoramics</a>
            <a href="">Miscellaneous</a>
            <a href="">Dunes</a>
            <a href="">Autumn Colors</a>
            <a href="">Beaches</a>
            <a href="">Flowers</a>
            <a href="">Monochromes</a>
            <a href="">Sandscape Monochromes</a>
          </div>   -->    
        </div>
    </div>  

    <!-- Gallery Right side -->
      <div id="thumbnailDiv" class="portfolio-right">&nbsp;</div>
    <div class="portfolio-bottom"><br /><div id="pageBox" data-current="<?php echo $page; ?>" data-display="<?php echo $displayCount; ?>">&nbsp;</div></div>
<div style="width: 100%; height: 80px; float: none; clear: both;">&nbsp;</div>
  <?php include('./includes/footer.php'); ?>
</div>

<script type="text/javascript" src="./scripts/lightbox.js"></script>

</body>

</html>