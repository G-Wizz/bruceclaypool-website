<?php
if(isset($_GET['active_page'])) {
    $active_page = $_GET['active_page'];
} /* else {
    $active_page = "home"; // default settings    
} */
?>
<nav id="navbar">
  <a id='logo-container' href="./index.php">
    <div id="bruce-title" class="effect-shine">
      <h4>Bruce Claypool</h4>
      <hr class="bruce-title-hr">
      <span class="bruce-title-small">Photography</span>
    </div>
  </a>
  <div id="nav-menu-full">
    <a href="./contact-photographer-bruce-claypool.php">
      <div class="nav-section <?php if($active_page=='contact') { echo 'activePageWhite'; } ?>">
        <div class="skew-back center-middle center-single">Contact</div>
      </div>
    </a>
    <a href="./purchase-photos.php">
      <div class="nav-section <?php if($active_page=='purchase') { echo 'activePageWhite'; } ?>">
        <div class="skew-back center-middle center-single">Purchase</div>
      </div>
    </a>
    <a href="./lightbox-photography-portfolio.php">
      <div class="nav-section <?php if($active_page=='portfolios') { echo 'activePageWhite'; } ?>">
        <div class="skew-back center-middle center-single">Portfolios</div>
      </div>
    </a>
    <a href="./about-photography-landscapes-scenery.php">
      <div class="nav-section <?php if($active_page=='about') { echo 'activePageWhite'; } ?>">
        <div class="skew-back center-middle center-single">About</div>
      </div>
    </a>
    <a href="./index.php">
      <div class="nav-section <?php if($active_page=='home') { echo 'activePageWhite'; } ?>">
        <div class="skew-back center-middle center-single">Home</div>
      </div>
    </a>    
  </div>
    <div id='mini-menu'>
        <img onclick="dropdownHandler()" src="./images/burger-menu.png" alt="" id="h-menu" width='43' height='43'>
      <div class='mini-list' id='dropdown'>
        <a href="./index.php" class="<?php if($active_page=='home') { echo 'activePage'; } ?>">Home</a>
        <a href="./about-photography-landscapes-scenery.php" class="<?php if($active_page=='about') { echo 'activePage'; } ?>">About</a>
        <a href="./lightbox-photography-portfolio.php" class="<?php if($active_page=='portfolios') { echo 'activePage'; } ?>">Portfolios</a>
        <a href="./purchase-photos.php" class="<?php if($active_page=='purchase') { echo 'activePage'; } ?>">Purchase</a>
        <a href="./contact-photographer-bruce-claypool.php" class="<?php if($active_page=='contact') { echo 'activePage'; } ?>">Contact</a>
      </div>
    </div>
</nav>