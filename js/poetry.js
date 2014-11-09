;$(function () {
  var $poetryContainer = $(".container")
    , $poemsDiv = $(".poems")
    , $bg = $("img.bg")
    , $window = $(window)

  $window
    .resize(function() {
      // Continuously copy bg <img> dimensions to ul element so that its children
      // can be scaled. Also scale font size explicitly, since using a % for font-size
      // doesn't accomplish what I want.
      var bgHeight = $bg.height()
      $poetryContainer
        .width($bg.width())
        .height(bgHeight)
      $poemsDiv
        .css("font-size", (bgHeight * (16/955)) + "px")
    })
    // Init scaling by running the above code when the big image is loaded.
    .load(function () { $window.resize() })
})
