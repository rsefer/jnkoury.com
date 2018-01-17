jQuery(document).ready(function($) {

	$('.nav-parent-link').click(function() {
		var thisSubnav = $(this).parent().find('.subnav');
		if (thisSubnav.hasClass('open')) {
      thisSubnav.hide();
			thisSubnav.removeClass('open');
		} else {
			$('.subnav').hide();
			thisSubnav.show().addClass('open');
		}
	});

	$('.nav-toggle').click(function() {
		$(this).toggleClass('active');
		$('.main-menu').toggle();
	});

  var slider = $('#slider').bxSlider({
    controls: true,
    pager: false,
    speed: 400,
    prevText: '&lt;',
    nextText: '&gt;',
    onSliderLoad: function(currentIndex) {
      activateThumb(currentIndex);
    },
    onSlideAfter: function($slideElement, oldIndex, newIndex) {
      activateThumb(newIndex);
  	}
  });

  $('.thumbs a').click(function() {
    var thumbIndex = $('.thumbs a').index(this);
    slider.goToSlide(thumbIndex);
    activateThumb($('.thumbs a').index($(this)));
    return false;
  });

});

function activateThumb(index) {
  $('.thumbs a').removeClass('pager-active');
  $('.thumbs a').eq(index).addClass('pager-active');
}
