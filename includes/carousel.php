<script type='text/javascript'>
$(function() {
 
 $('#carousel').carouFredSel({
   width: '100%',
   items: {
     visible: 'odd+2'
   },
   scroll: {
     pauseOnHover: true,
     onBefore: function() {
       $(this).children().removeClass( 'hover' );
     }
   },
   auto: {
     items: 1,
     easing: 'linear',
     duration: 1250,
     timeoutDuration: 0
   },
   pagination: {
     container: '#pager',
     items: 1,
     duration: 0.5,
     queue: 'last',
     onAfter: function() {
       var cur = $(this).triggerHandler( 'currentVisible' ),
         mid = Math.floor( cur.length / 2 );

       cur.eq( mid ).addClass( 'hover' );
     }
   }
 });

});
</script>

<div id="wrapper">
	<div id="carousel">
		<div>
			<a href="./lightbox-photography-portfolio.php?category=eastern-landscapes&display=20&page=1"><img src="images/home/le014-home.jpg" class='imageShadow' alt="fruit1" width="320" height="320" /></a>
			<span>Eastern Landscapes</span>
		</div>
		<div>
    <a href="./lightbox-photography-portfolio.php?category=western-landscapes&display=20&page=1" ><img src="images/home/lw037-home.jpg" class='imageShadow' alt="fruit2" width="320" height="320" /></a>
			<span>Western Landscapes</span>
		</div>
		<div>
    <a href="./lightbox-photography-portfolio.php?category=miscellaneous&display=20&page=1" ><img src="images/home/misc016-home.jpg" class='imageShadow' alt="fruit3" width="320" height="320" /></a>
			<span>Miscellaneous</span>
		</div>
		<div>
    <a href="./lightbox-photography-portfolio.php?category=monochromes&display=20&page=1" ><img src="images/home/mono007-home.jpg" class='imageShadow' alt="fruit4" width="320" height="320" /></a>
			<span>Monochrome</span>
		</div>
		<div>
			<a href="./lightbox-photography-portfolio.php?category=eastern-landscapes&display=20&page=1"><img src="images/home/le014-home.jpg" class='imageShadow' alt="fruit1" width="320" height="320" /></a>
			<span>Eastern Landscapes</span>
		</div>
		<div>
    <a href="./lightbox-photography-portfolio.php?category=western-landscapes&display=20&page=1" ><img src="images/home/lw037-home.jpg" class='imageShadow' alt="fruit2" width="320" height="320" /></a>
			<span>Western Landscapes</span>
		</div>
		<div>
    <a href="./lightbox-photography-portfolio.php?category=miscellaneous&display=20&page=1" ><img src="images/home/misc016-home.jpg" class='imageShadow' alt="fruit3" width="320" height="320" /></a>
			<span>Miscellaneous</span>
		</div>
		<div>
    <a href="./lightbox-photography-portfolio.php?category=monochromes&display=20&page=1" ><img src="images/home/mono007-home.jpg" class='imageShadow' alt="fruit4" width="320" height="320" /></a>
			<span>Monochrome</span>
		</div>
		
		
		
	</div>
	<div id="pager"></div>
</div>