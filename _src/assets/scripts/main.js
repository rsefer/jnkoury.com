jQuery(document).ready(function($) {

	$('.nav-parent-link').click(function() {
		var thisSubnav = $(this).parent().find('.subnav');
		if (thisSubnav.hasClass('open')) {
      thisSubnav.slideUp();
			thisSubnav.removeClass('open');
		} else {
			$('.subnav').slideUp();
			thisSubnav.slideDown().addClass('open');
		}
	});

  var slider = $('#slider').bxSlider({
    controls: false,
    speed: 400
  });

  $('.thumbs a').click(function() {
    var thumbIndex = $('.thumbs a').index(this);
    slider.goToSlide(thumbIndex);
    $('.thumbs a').removeClass('pager-active');
    $(this).addClass('pager-active');
    return false;
  });

  $('.thumbs a:first').addClass('pager-active');

});
