jQuery(function($){

      $('#slick1').slick({
        // rows: 1,
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1
    });
      $('#slick2').slick({
        // rows: 1,
        dots: false,
        arrows: true,
        infinite: false,
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1
    });
      $('#slick3').slick({
        // rows: 1,
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 4
    });
    
    $('#prod').slick({
      // rows: 1,
      dots: false,
      arrows: true,
      infinite: false,
      speed: 800,
      slidesToShow: 1,
      slidesToScroll: 1
  });
    


});
