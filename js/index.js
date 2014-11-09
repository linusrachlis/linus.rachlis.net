;$(function () {
  var $nav = $("nav")
    , $navUl = $("nav ul")
    , $bg = $("img.bg")
    , $shift = $("img.shift")
    , $navAnchors = $("nav ul li a")
    , $window = $(window)

  $navAnchors
    .mouseover(function () {
      // Make "idle" mean that no key is being hovered
      $navUl.removeClass("idle")
      // Label appears
      $(this).data("label").addClass("active")
    })
    .mouseout(function () {
      // Go back to cycling keys
      $navUl.addClass("idle")
      // Label disappears
      $(this).data("label").removeClass("active")
    })
    .each(function () {
      var $this = $(this)
        , $label = $("<div class='label'></div>").html($this.html())
      $this.data("label", $label)
      $nav.prepend($label)
    })

  // @ and * also make shift light up
  $("nav ul li.contact a, nav ul li.experiments a")
    .mouseover(function () {
      $shift.addClass("on")
    })
    .mouseout(function () {
      $shift.removeClass("on")
    })

  $window
    .resize(function() {
      // Continuously copy bg <img> dimensions to nav element so that its children
      // can be scaled. Also scale font size explicitly, since using a % for font-size
      // doesn't accomplish what I want.
      var bgHeight = $bg.height()
      $nav.width($bg.width())
      $nav.height(bgHeight)
      $("nav .label").css("font-size", (bgHeight * 0.04) + "px")
    })
    // Init scaling by running the above code when the big image is loaded.
    .load(function () { $window.resize() })
    .keydown(function (e) {
      // Respond to actually pressing the keys indicated.
      switch (e.which) {
        case 50: // 2
          if (e.shiftKey) {
            $("nav ul li.contact a")[0].click()
          }
          break;
        case 56: // 8
          if (e.shiftKey) {
            $("nav ul li.experiments a")[0].click()
          }
          break;
        case 80: // p
          $("nav ul li.poetry a")[0].click()
          break;
        case 82: // r
          $("nav ul li.resume a")[0].click()
          break;
      }
    })
})
