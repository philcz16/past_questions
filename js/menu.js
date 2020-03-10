$(document).ready(function() {
  $('#menu').click(function() {
    var $menu = $('.top-nav');
    if($menu.is(':hidden')) {
      $menu.slideToggle('fast');
    } else {
		$menu.slideToggle('fast');
    }
  });
}) // end ready