;$(function () {
  var $poetryContainer = $(".container")
    , $poemsDiv = $(".poems")
    , $poemDiv = $(".poem")
    , $poemText = $(".poem .text")
    , $backButton = $(".back")
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
      $poemsDiv.css("font-size", (bgHeight * (16/955)) + "px")
      $poemText.css("font-size", (bgHeight * (17/955)) + "px")
    })
    // Init scaling by running the above code when the big image is loaded.
    .load(function () { $window.resize() })
  
  // Open poem
  $(".poems a").click(function (e) {
    e.preventDefault()
    var $this = $(this)
    $poemText.load($this.attr('href') + " .poem-text")
    $poemsDiv.add($backButton).fadeOut('fast', function () {
      $poemDiv.fadeIn('slow')
    })
  })
  
  // Close poem
  $poemDiv.click(function () {
    $poemDiv.fadeOut('fast', function () {
      $poemText.text("...")
      $poemsDiv.add($backButton).fadeIn('fast')
    })
  })
})
