$(function(){
    /* Pagination Clicks */
    $(document).on('click', "a.aPages", function(e) {
        console.log('aPages clicked');
        e.preventDefault();
        e.stopPropagation();
        var p = $(this).attr('data-page');
        var getCurrent = $("#catMenu").attr('data-current');
		callRow(getCurrent,p);
    });
    var sVtimer = window.setTimeout(function(){
		console.log("timer start");
		clearTimeout(sVtimer);
		// First call //
        var p = $("#pageBox").attr('data-current');
        var getCurrent = $("#catMenu").attr('data-current');
        console.log('getCurrent='+getCurrent);
		callRow(getCurrent,p);
	}, 500);
    function callRow(c,p) {
		console.log("callRow : c="+c);
        var d = $("#pageBox").attr('data-display');
		var dString = "category="+c+"&display="+d+"&page="+p;
		var req = $.ajax({
			type: "POST",
			url: "includes/thumbnail-display.php?",
			data: dString,
			cache: false,
			dataType: "html"
		});
		req.done(function( msg ) {
//            alert("decode: "+msg); // display output to find errors //
            var doMsg = msg.split('••');
            $("#catMenu").html(doMsg[0]);
            $("pSelect").html(doMsg[1]);
            var pt = doMsg[2].replace('-',' ');
            $("#categoryTitle").html('Lightbox Photo Gallery Portfolio Collection</span> <br /><span class="bruce-font-plain">'+pt);
			$("#pageBox").data('current',doMsg[3]);
 //           $("#thumbnailDiv").css('opacity', 0.0);
			$("#thumbnailDiv").html(doMsg[4]);
			$("#pageBox").html(doMsg[5]);
  //          preloader();
            //
            $('.imgT').each(function(){
                $('<img/>', {src: $(this).attr("src"), class: 'precachedImg', style: 'display:none;'}).appendTo('body');
            }, function() {
                console.log('done');
            });
            //
            $('.imgT').each(function(){
                $('<img/>', {src: $(this).data('large'), class: 'precachedImg', style: 'display:none;'}).appendTo('body');
            });
            function callBackLarge() {
                console.log('large done');
            };
            //clean up the DOM as the images are loaded and cached
            $('.precachedImg').on('load', function() {
                $(this).remove();
            });
		});
		req.fail(function(textStatus) {
			alert('Request Fail: ' + textStatus);
		});
	}
    //


    
})