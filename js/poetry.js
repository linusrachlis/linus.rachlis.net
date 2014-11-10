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
        // A height of 613px for the bg image is the breakpoint between
        // the font ratios.
        , fontSizeRatio = (bgHeight > 613) ? (16/955) : (16/715)
      $poetryContainer
        .width($bg.width())
        .height(bgHeight)
      $poetryContainer.css("font-size", (bgHeight * fontSizeRatio) + "px")
    })
    // Init scaling by running the above code when the big image is loaded.
    .load(function () { $window.resize() })
  
  // Open poem
  $(".poems a").click(function (e) {
    e.preventDefault()
    var $this = $(this)
    $poemText.load($this.attr('href') + " .poem-text")
    $poetryContainer.addClass('reading-mode')
    // In IE10, setting poemsDiv to display:none (what happens upon completion of $.fadeOut())
    // resets its scroll position, but setting opacity to 0 doesn't.
    $poemsDiv.add($backButton).animate({opacity: 0}, 'fast', function () {
      $poemDiv.fadeIn('slow')
      // Reset poem scroll position (it persists in FF despite the content reset).
      $poemText.scrollTop(0)
    })
  })
  
  // Close poem
  $poemDiv.click(function () {
    $poetryContainer.removeClass('reading-mode')
    $poemDiv.fadeOut('fast', function () {
      // When it finishes fading out, reset content to loading indicator.
      $poemText.text("...")
      // See above comment re: IE.
      $poemsDiv.add($backButton).animate({opacity: 1}, 'fast')
    })
  })
})
