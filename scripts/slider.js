$(document).ready(function() {
  $("#previous").on("click", function() {
    $("#img_" + currentImage)
      .stop()
      .fadeOut(2);
    decreaseImage();
    $("#img_" + currentImage)
      .stop()
      .fadeIn("slow");
  });
  $("#next").on("click", function() {
    $("#img_" + currentImage)
      .stop()
      .fadeOut(2);
    increaseImage();
    $("#img_" + currentImage)
      .stop()
      .fadeIn("slow");
  });

  var currentImage = 1;
  var totalImages = 3;

  function increaseImage() {
    ++currentImage;
    if (currentImage > totalImages) {
      currentImage = 1;
    }
  }
  function decreaseImage() {
    --currentImage;
    if (currentImage < 1) {
      currentImage = totalImages;
    }
  }
  window.setInterval(function() {
    $("#previous").click();
  }, 4000);
});
