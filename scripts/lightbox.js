/*
var images = document.querySelectorAll(".thumbs img");
var lightboxImage = document.querySelector(".lightbox-content img");
var lightboxContent = document.querySelector(".lightbox-image");
var lightboxBackground = document.querySelector(".lightbox-background");

var closeButton = document.querySelector(".close");

lightboxBackground.addEventListener("click", function(event) {
  lightboxBackground.classList.remove("is-visible");
  lightboxContent.classList.remove("is-visible");
});

closeButton.addEventListener("click", function(event) {
  lightboxBackground.classList.remove("is-visible");
  lightboxContent.classList.remove("is-visible");
});

images.forEach(function(image) {
  var imagesSrc = image.src;

  image.addEventListener("click", function(event) {
    lightboxImage.src = imagesSrc;
    lightboxBackground.classList.add("is-visible");
    lightboxContent.classList.add("is-visible");
  });
});
*/



$(function() {
    $("#close").on('click', function(e) {
        e.preventDefault();
        removeVisible();
    });
    $("#lightbox-background").on('click', function(e) {
        e.preventDefault();
        removeVisible();
    });
    function removeVisible() {
        $("#lightbox-background").fadeOut(500, function() {
            $(this).removeClass("is-visible");
        });
        $("#lightbox-image").fadeOut(500, function(){
            $(this).removeClass("is-visible");
        });
    }
    //
    $(document).on('click', ".imgT", function(e) {
        e.preventDefault();
        var largeSrc = $(this).attr('data-large');
        var lW = $(this).attr('data-lwidth');
        var lH = $(this).attr('data-lheight');
        $("#lImg").attr('src', ""+largeSrc+"");
        $("#lImg").attr('width', ""+lW+"");
        $("#lImg").attr('height', ""+lH+"");
        $("#lightbox-content").css('max-width', ""+lW+"px");
        $("#lightbox-content").css('max-height', ""+lH+"px");
        $("#lightbox-background").fadeIn("slow", function() {
            $(this).addClass("is-visible");
        });
        $("#lightbox-image").fadeIn(1000, function(){
            $(this).addClass("is-visible");
        }); 
    });
})