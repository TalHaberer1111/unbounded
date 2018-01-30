      $( document ).ready(function() {

        $('a').click(function( e ){
          e.preventDefault();
          var targetId = $(this).attr("href");
          var top = $(targetId).offset().top;
          $('html, body').stop().animate({scrollTop: top }, 800);
      });


        $('.sliderTwo').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 3000,
          arrows: false,
          centerMode: true,
          centerPadding: true,
          responsive: [
            {
          breakpoint: 992,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            autoplay: true,
            autoplaySpeed: 3000,
            centerMode: true,
            adaptiveHeight: true,
          }
        }
       ]
      });

        $('.imageSlider').slick({
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        centerMode: true,
        centerPadding: true,
        });
    });
