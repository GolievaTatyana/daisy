jQuery(function($) {

  // $('wrapp').mCustomScrollbar({
  //   mouseWheel: {preventDefault: false},
  //   contentTouchScroll: false,
  //   documentTouchScroll: false,
  //   theme: 'minimal-dark',
  // });
  //
  // $('.custom-scroll').mCustomScrollbar({theme: 'minimal-dark'});

  $(document).ready(function(){
    $('.banner-items').slick({
      // autoplay: true,
      // autoplaySpeed: 2000,
      dots: false,
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear'
    });

    $('.single-item').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1
    });

    $('.all-members').slick({
      // autoplay: true,
      // autoplaySpeed: 2000,
  		infinite: true,
  		speed: 300,
  		slidesToShow: 3,
  		slidesToScroll: 3,
  		responsive: [{
  				breakpoint: 1025,
  				settings: {
  					slidesToShow: 2,
  					slidesToScroll: 2
  				}
  			},
  			{
  				breakpoint: 768,
  				settings: {
  					slidesToShow: 1,
  					slidesToScroll: 1
  				}
  			},
  			{
  				breakpoint: 480,
  				settings: {
  					slidesToShow: 1,
  					slidesToScroll: 1
  				}
  			}
  		]
  	});

    $('.one-member').slick();
  });




  $('.single-info a').click(function(e) {
    e.preventDefault();
    $(this).parents('.slider-container').find('.single-item').slick('slickGoTo',  $(this).data('tabindex'));
  });


  $(document).ready(function() {
    $("a.fancy").fancybox({
      prevEffect	: 'none',
		  nextEffect	: 'none',
		  helpers	: {
			  title	: {
				  type: 'outside'
			  },
			  thumbs	: {
				  width	: 50,
				  height	: 50
			  }
		  }
    });
  });

});
