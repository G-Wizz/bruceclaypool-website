<?php // possible variables to recieve by ajax by method $_POST
if(isset($_POST['category'])) {
	$cat = $_POST['category'];
} else {
	$cat = '';
    echo"Error: category not sent!";
    exit();
}
if(isset($_POST['page'])) {
	$page = $_POST['page'];
} else {
	$page = 1; // default to page 1
}
if(isset($_POST['display'])) {
	$display = $_POST['display'];
} else {
	$display = 10; // default to 10 per page/
}
$start = ($page-1)*$display; // Calculate what page to start from //
//
// NOTE - This entire file generates return data seperated by '••' - Don't remove the double •• bullets ! // The recieving aJax script expects to split the string passed using the '••' - cordinate future changes along with aJax script that called it on the porfolio page.
//
include('dbconnecti.php'); // THIS IS YOUR DATABASE CONNECTION SCRIPT ! Run before any MySql attempt !
// Build the category menu #catMenu //
$getCats = "select category_name, cat_order from categories"; //  MySql 'select' string setup..
if (!$gCat = $mysqli->query($getCats)) { // Test 'select' string handle error //
    // Oh no! The query failed. 
      echo "Sorry, the website is experiencing problems.";
    // Again, do not do this on a public site, but we'll show you how to get the error information
      echo "Error: Our query failed to execute and here is why: \n";
      echo "Query: " . $getCats . "\n";
      echo "Errno: " . $mysqli->errno . "\n";
      echo "Error: " . $mysqli->error . "\n";
      exit;
} else { // Test - Success Proceed //
      $gctNum = $gCat->num_rows; //store nNumber of rows count;
    $bScript = '<script type="text/javascript">
    '; // build coded html script to variable
    $bMenu = ''; // build html cat menu to variable
    $sMenu = ''; // build html cat select menu to variable
    if(!$gctNum) {
        $gctNum = 0;
        echo "Sorry! No cateogries in the database.";
        exit();
    } else {        
        while($ctget = $gCat->fetch_object()) {
          $catn = $ctget->category_name; // with dash //
          $ctName = str_replace('-',' ',$catn); // convert dash to space //
          $bScript .= '$("#'.$catn.'").on("click", function(e){
                    e.preventDefault();
                    console.log("'.$catn.' clicked!");
                    var d = $("#pageBox").attr("data-display");
                    var c = "'.$catn.'";
                    var p = 1;
                    var dString = "category="+c+"&display="+d+"&page="+p;
                    window.location=(\'lightbox-photography-portfolio.php?\'+dString+\'\');
                });
                ';
          // This handles if $cat is sent the 'default' - page load 1st occurance situation
          if($cat=='default') {
             $cat = $catn; // load page with this default - 1st directory it finds
             $cName = $ctName; //."••"; // save to append to end of build later //
          } else {
              $cName = $cat; //."••"; // save to append to end of build later //
          }
          // Build out the strings... //
          $bMenu .= '<a href="#'.$catn.'" ><div id="'.$catn.'" class="li-div ';
          if($catn==$cat) { $bMenu .= 'li-active'; }
          $bMenu .= '">'.$ctName.'</div></a>';
          $sMenu .= '<option value="'.$catn.'">'.$ctName.'</option>';
        }
        $bScript .= '</script>';
        $bMenu .= '';
        echo $bScript.$bMenu.'••'.$sMenu.'••'.$cName.'••';
 
    }
}
//
// Get total page count for pagination //
$pgString = "select aID from photos where category = '".$cat."' order by row_order asc";
if (!$resultPg = $mysqli->query($pgString)) {
    // Oh no! The query failed. 
      echo "Sorry, the website is experiencing problems.";
    // Again, do not do this on a public site, but we'll show you how to get the error information
      echo "Error: Our query failed to execute and here is why: \n";
      echo "Query: " . $pgString . "\n";
      echo "Errno: " . $mysqli->errno . "\n";
      echo "Error: " . $mysqli->error . "\n";
      exit;
} else {
    $pgNum = $resultPg->num_rows;
    if(!$pgNum) {
        $pgNum = 0;
    }
    $tPages = round($pgNum/$display); // Don't want decminals! rounding up solves.
    echo $tPages."••";
}
//
// MySql setup for images - thumbnails code //
// Run through the loop using $display as limit for thumbs //
$rdString = "select * from photos where category = '".$cat."' order by row_order asc limit ".$start.",".$display."";
if (!$result = $mysqli->query($rdString)) {
    // Oh no! The query failed. 
      echo "Sorry, the website is experiencing problems.";
    // Again, do not do this on a public site, but we'll show you how to get the error information
      echo "Error: Our query failed to execute and here is why: \n";
      echo "Query: " . $rdString . "\n";
      echo "Errno: " . $mysqli->errno . "\n";
      echo "Error: " . $mysqli->error . "\n";
      exit;
} else {
    $crNum = $result->num_rows;
    if(!$crNum) {
        $crNum = 0;
    }
}
//	echo "crNum:".$crNum;
while($row = $result->fetch_object()) { // Build out all thumbnails code //
    $category = $row->category;
    $image_dir = $row->image_dir;
    $sizes = $row->sizes;
    $fss = explode(':',$sizes,2);
    $tfs = explode('x',$fss[0],2); // get thumb sizes
    $lfs = explode('x',$fss[1],2); // get large sizes
    $alt_info = $row->alt_info;
    $name = $row->name;
    $order_number = $row->order_number;
    $image_enable = $row->image_enable;
    $fontsize = $row->fontsize;
    $aligement = $row->alignment;
    $row_enable = $row->row_enable;
?><div class="thumbs"><img class="imgT" src="<?php echo $image_dir.$category ?>/thumbnails/<?php echo $name; ?>" width="<?php echo $tfs[0]; ?>" height="<?php echo $tfs[0]; ?>" alt="<?php echo $alt_info; ?>" data-large="<?php echo $image_dir.$category ?>/images/<?php echo $name; ?>" data-lwidth="<?php echo $lfs[0]; ?>" data-lheight="<?php echo $lfs[1]; ?>"/><?php echo "<br />".$order_number; ?></div>
<?php } ?>
••<?php // Develop Pagination code //
if($tPages>1) {
  for($l=1;$l<=$tPages;$l++) {
   // echo $l.':';
    if($l==1){ // First is special to the previous buttons //
        ?><a href="#pagination-first" data-page="1" class="aPages" <?php if($page==1) { echo'disabled'; } ?> >«</a>&nbsp; <a href="#pagination-previous" data-page="<?php if(($page-1)==0) { echo '1'; } else { echo $page-1; } ?>" class="aPages" <?php if($page==1) { echo'disabled'; } ?> >&lt;</a>&nbsp; <a href="#pagination-1" data-page="1" class="aPages <?php if($page==1) { echo'aPageActive'; } ?>" <?php if($page==1) { echo'disabled'; } ?> >1</a>&nbsp;<?php
    }
    if(($l!=1)&&($l!=$tPages)) { // All the rest //
        ?><a href="#pagination-<?php echo $l; ?>" data-page="<?php echo $l; ?>" class="aPages <?php if($page==$l) { echo'aPageActive'; } ?>" ><?php echo $l; ?></a>&nbsp;<?php
    }
    if(($l==$tPages)&&($l!=1)) { // Last is special to the forward buttons //
        ?><a href="#pagination-<?php echo $l; ?>" data-page="<?php echo $l; ?>" class="aPages <?php if($page==$l) { echo'aPageActive'; } ?>" <?php if($page==$tPages) { echo'disabled'; } ?> ><?php echo $l; ?></a>&nbsp; <a href="#pagination-next" data-page="<?php if(($page+1)>$tPages) { echo $tPages; } else { echo $page+1; } ?>" class="aPages" <?php if($page==$tPages) { echo'disabled'; } ?> >&gt;</a>&nbsp; <a href="#pagination-last" data-page="<?php echo $l; ?>" class="aPages" <?php if($page==$tPages) { echo'disabled'; } ?> >»</a><?php $l=$tPages+1; // set $l past for loop //
    }
  }
}
?> 

