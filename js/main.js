;$(function () {
  var $nav = $("nav")
    , $navUl = $("nav ul")
    , $bg = $("img.bg")
    , $shift = $("img.shift")
    , $navAnchors = $("nav ul li a")
    , $window = $(window)

  $window
    .resize(function() {
      $nav.width($bg.width())
      $nav.height($bg.height())
    })
    .resize()
    .keydown(function (e) {
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

  // Make "idle" mean that no key is being hovered
  $navAnchors
    .mouseover(function () {
      $navUl.removeClass("idle")
    })
    .mouseout(function () {
      $navUl.addClass("idle")
    })

  // @ and * also make shift light up
  $("nav ul li.contact a, nav ul li.experiments a")
    .mouseover(function () {
      $shift.addClass("on")
    })
    .mouseout(function () {
      $shift.removeClass("on")
    })
})
