jQuery(document).ready(function($) {

	$('.nav-parent-link').click(function(e) {
    e.preventDefault();
		var thisSubnav = $(this).parent().find('.subnav')[0];
		if ($(thisSubnav).hasClass('open')) {
			$(thisSubnav).removeClass('open');
		} else {
      $('.subnav').removeClass('open').attr('style', '');
			$(thisSubnav).show().addClass('open');
		}
    $(thisSubnav).attr('style', '');
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
