;$(function () {
  var $contactContainer = $(".container")
    , $bg = $("img.bg")
    , $window = $(window)

  $window
    .resize(function() {
      // Continuously copy bg <img> dimensions to ul element so that its children
      // can be scaled. Also scale font size explicitly, since using a % for font-size
      // doesn't accomplish what I want.
      var bgHeight = $bg.height()
      $contactContainer
        .width($bg.width())
        .height(bgHeight)
        .css("font-size", (bgHeight * (36.8/920)) + "px")
    })
    // Init scaling by running the above code when the big image is loaded.
    .load(function () { $window.resize() })
})
