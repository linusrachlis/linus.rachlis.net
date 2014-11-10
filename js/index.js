;$(function () {
  var $nav = $("nav")
    , $navUl = $("nav ul")
    , $bg = $("img.bg")
    , $shift = $("img.shift")
    , $navLis = $("nav ul li")
    , $window = $(window)

  $navLis
    .on('mouseover', function () {
      var $this = $(this)
      // Make "idle" mean that no key is being hovered
      $navUl.removeClass("idle")
      if (!Modernizr.touch) {
        // Label appears
        $this.data("label").addClass("active")
      }
    })
    .on('mouseout', function () {
      var $this = $(this)
      // Go back to cycling keys
      $navUl.addClass("idle")
      if (!Modernizr.touch) {
        // Label disappears
        $this.data("label").removeClass("active")
      }
    })
    .each(function () {
      var $this = $(this)
        , $keyAnchor = $this.children(".key")
        , labelBaseHtml = (Modernizr.touch)
            ? ("<a href='" + $keyAnchor.attr('href') + "' class='label'></a>")
            : "<span class='label'></span>"
        , $label = $(labelBaseHtml).html($keyAnchor.html())
      if (Modernizr.touch) {
        // Put label anchor in this LI, alongside keyAnchor, so it can
        // be positioned relative to this LI.
        $this.prepend($label)
      } else {
        $nav.prepend($label)
        $this.data("label", $label)
      }
    })

  // @ and * also make shift light up
  $("nav ul li.contact, nav ul li.experiments")
    .on('mouseover', function () {
      $shift.addClass("on")
    })
    .on('mouseout', function () {
      $shift.removeClass("on")
    })

  // Keyboard focus on .key anchors should trigger same as hover
  // on LIs.
  $("nav ul li .key")
    .on('focus', function () {
      $(this).parent().addClass('focus').mouseover()
    })
    .on('blur', function () {
      $(this).parent().removeClass('focus').mouseout()
    })

  $window
    .resize(function() {
      // Continuously copy bg <img> dimensions to nav element so that its children
      // can be scaled. Also scale font size explicitly, since using a % for font-size
      // doesn't accomplish what I want.
      var bgHeight = $bg.height()
      $nav.width($bg.width())
      $nav.height(bgHeight)
      $("nav").css("font-size", (bgHeight * 0.04) + "px")
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
