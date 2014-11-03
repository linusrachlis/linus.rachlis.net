;$(function () {
  var $nav = $("nav")
    , $navUl = $("nav ul")
    , $bg = $("img.bg")
    , $shift = $("img.shift")
    , $navAnchors = $("nav ul li a")
    , $window = $(window)

  $window.resize(function() {
    $nav.width($bg.width())
    $nav.height($bg.height())
  })
  .resize()

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
