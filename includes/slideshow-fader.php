<script type="text/javascript">
$(function() {
    var slides = $('.slideShow>div');
    var slideCount = 0;
    var totalSlides = slides.length-1; // minus 1 for the default.png file background setup - needed //
    var slideCache = [];
    console.log('slideCount:'+slideCount+' totalSlides:'+totalSlides+' \n');

    preloader();
    
    function preloader() {
        if(slideCount < totalSlides) {
            console.log('~ slideCount: '+slideCount+'');
            // Load Images
            slideCache[slideCount] = new Image();
            slideCache[slideCount].src = slides.eq(slideCount).find('img').attr('src');
            slideCache[slideCount].onload = function() {
//                console.log('preloaded:'+slideCount+'\n')
                slideCount++;
                preloader();
            }
        } else {
//            console.log('run slideshow \n');
            // Run the slideshow
            slideCount = 0;
            slideShow();
        }
    }
    function slideShow() {
        console.log('run slideCount: '+slideCount+'\n');
        $("#pfile-"+slideCount).delay(7000).fadeOut(1000, function(){
            slideCount++;
            if(slideCount>totalSlides-2) {
//                slideCount=0;
                $("#pfile-0").fadeIn(10, function(){
                    while(slideCount>0) {
                        slideCount--;
                        $("#pfile-"+slideCount).fadeIn(10);
                    }
                    slideCount = 0;
                    slideShow();
                });
//                console.log('done');
            } else {
                slideShow();
            }
        });
    }
})
</script>

<aside id="slideshow-fader">
    <!-- Setup images so the first is also last - smoother transition back to beginning -->
<div id="slider-container" >
    <div id="file-holder" class="slideShow">
        <div id="pfile-0" style="z-index: 110;" class="slideshowDiv";><img src="images/slider/panoramic_001.jpg" width="1148" height="400" class="slide-img"  alt=""/></div>

        <div id="pfile-1" style="z-index: 109;" class="slideshowDiv";><img src="images/slider/panoramic_009.jpg" width="1148" height="400" class="slide-img"  alt=""/></div>
        <div id="pfile-2" style="z-index: 108;" class="slideshowDiv ";><img src="images/slider/panoramic_013.jpg" width="1148" height="400" class="slide-img"  alt=""/></div>
        <div id="pfile-3" style="z-index: 107;" class="slideshowDiv ";><img src="images/slider/panoramic_068.jpg" width="1148" height="400" class="slide-img"  alt=""/></div>
        <div id="pfile-4" style="z-index: 106;" class="slideshowDiv";><img src="images/slider/panoramic_001.jpg" width="1148" height="400" class="slide-img" alt=""/></div>
<div style="width: 100%; height: auto; float: none; clear: both; /* background-color: #9f9f99; */"><img src="images/slider/default-1148x400.png" style="z-index: 120; width: 100%; height: 100%; opacity: 0.0;" width="1148" height="400"></div>
    </div>
 <!--   <div style="width: 100%; height: 80px; float: none; clear: both; background-color: #ff9f99;">&nbsp;</div>-->
</div>
    <div style="width: 100%; height: 40px; float: none; clear: both; /* background-color: #9f9f99; */">&nbsp;</div>
</aside>