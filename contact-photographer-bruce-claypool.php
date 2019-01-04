<?php
$active_page = "contact"; // Set active page for menus 
?>
<!DOCTYPE html>
<html>
<head>
  <meta lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Bruce Claypool Photography | 856-985-7077 | 9am-5pmEST</title>
  <link rel='stylesheet' href='./styles/nav.css'>
<!-- <script src="scripts/jquery-3.3.1.js" type="text/javascript"></script> -->
  <script src="scripts/jquery-3.3.1-min.js" type="text/javascript"></script>
  <script src="./scripts/dropdown.js" type="text/javascript"></script>
</head>
<body>
  <header>
    <div class="header-div-container">
      <?php  include('./includes/nav.php'); ?>
    </div>
  </header>  
 <div id='body-container'>
     <div id="h1div"><h1>Contact <span class="bruce-font">Bruce Claypool</span> Photography</h1></div>
     <section>
      <div class="page-content">
        <div id='left-column'>
          <div id="contact-info">
            <h1>Contact Information</h1>
            <h4>Please feel free to contact us at:</h4>
            <p>Bruce Claypool<br />Zone 10 Studios<br>
            2 Stone Mountain Lane<br />Marlton, NJ 08053</p>
            <h4>or by phone at:</h4>
            <p>856-985-7077 (9AM to 5PM EST)</p>
            <h4>or by FAX at:</h4>
            <p>856-797-1706</p>
            <h4>To Purchase or for Sales Inquiries:</h4>
            <p>sales@bruceclaypool.com</p>
            <h4>To Report Problems or Issues with the Web Site:</h4>
            <p>webmaster@bruceclaypool.com</p>
          </div>
        </div>
         <div id='right-column' class="forceCenter">
            <div id="contact-page-image">
              <img src="./images/contact/lw010_web.jpg" width="100%" height="100%" class="imageShadow" alt="">
              <p>Bruce Claypool Western shoot location.</p>
            </div>
         </div>
         <div style="width: 100%; height: 40px; display: inline-block; float: none; clear: both;">&nbsp;</div>
         <div style="width: 100%; height: auto; display: inline-block;">
            <div style="width: 90%; padding-left: 5%; padding-right: 5%; padding-top: 1%; padding-bottom: 5%; background-color: #404040; text-align: center; margin-bottom: -60px;">
              <div style="width: 66%; background-color: #cecece; margin: 0 auto;">
               <form id='contact' action="" method='post'>
                <h3>Send Us a Message!</h3>
                <fieldset>
                <input placeholder='Your name' type="text">
                </fieldset>
                <fieldset>
                <input placeholder='Your email address' type="email">
                </fieldset>
                <fieldset>
                <textarea placeholder='Type your message here' name="message" id="" cols="30" rows="10"></textarea>
                </fieldset>
                <fieldset>
                <button name='submit' type='submit'>Send</button>
                </fieldset>
               </form>
             </div>
            </div>
          </div>
      </div>
      </section>
      
  <?php include('./includes/footer.php'); ?>

  </div>
</body>

</html>