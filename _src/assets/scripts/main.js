jQuery(document).ready(function($) {
  $('#residential-link').click(function() {
  	if ($('#residential-list').hasClass('open')) {
  		$('#residential-list').removeClass('open');
  		$('#residential-list').slideUp();
  	} else {
  		if ($('#commercial-list').hasClass('open')) {
  			$('#commercial-list').removeClass('open');
  			$('#commercial-list').slideUp();
  		}

  		$('#residential-list').addClass('open');
  		$('#residential-list').slideDown();
  	}
  });
  $('#commercial-link').click(function() {
  	if ($('#commercial-list').hasClass('open')) {
  		$('#commercial-list').removeClass('open');
  		$('#commercial-list').slideUp();
  	} else {
  		if ($('#residential-list').hasClass('open')) {
  			$('#residential-list').removeClass('open');
  			$('#residential-list').slideUp();
  		}

  		$('#commercial-list').addClass('open');
  		$('#commercial-list').slideDown();
  	}
  });

  var slider = $('#slider').bxSlider({
    controls: false,
    speed: 400
  });

  $('.thumbs a').click(function(){
   var thumbIndex = $('.thumbs a').index(this);
    slider.goToSlide(thumbIndex);
    $('.thumbs a').removeClass('pager-active');
    $(this).addClass('pager-active');
    return false;
  });

  $('.thumbs a:first').addClass('pager-active');
});
