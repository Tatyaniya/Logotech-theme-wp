$( function() {


    $('.humburger').click(function(){
        $( ".menu" ).toggleClass("menu-open");
    });


    $(".offer__link").click( function(e) {
        e.preventDefault();
		elementClick = $(e.currentTarget).attr("href");
		destination = $(elementClick).offset().top;
        $("body,html").animate({scrollTop: destination }, 600);
    });


    $('.slick-slider').slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows : false,
    });

});

