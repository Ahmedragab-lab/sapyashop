$(document).ready(function () {


/*------- loding page --------*/
    $(window).on('load',function () {
        $('.load').fadeOut();
    });
    setTimeout(function () {
		$('.load').fadeOut();
	},5000);

/*------------X-------------X-----------*/





// wow js --------------------------------
new WOW().init();
/*--------------X------------X----------------*/



// nav bar fixed ---------------------------------
$(window).on("scroll",function () {
    if ( $(window).scrollTop() > 100 ) {
        $(".header").addClass("fixed");
    }
    else{
        $(".header").removeClass("fixed");
    }
});
/*--------------X-----------------X---------------*/


// smoth scroll -------------------------------------
$('.navbar li').on('click',function (e) {
    $('body,html').animate({
        scrollTop : $( '#' + $(this).data('link') ).offset().top
    },1000);

    e.preventDefault();
});

// add class active -----------
$(".navbar li").on('click',function () {
    $(this).addClass('active').siblings().removeClass('active')
});

// btn about smoth scroll ----------
$("#btn-scroll").on('click',function (e) {
    $('html,body').animate({
        scrollTop : $( '#' + $(this).data('link') ).offset().top - 85
    },1000);

    e.preventDefault();
});


/*-------------------------X-------------------X---------------*/





// video ---------------------------
$(document).ready(function(){
    $('.venobox').venobox(); 
});


$('.video-content-icon i').on('click',function () {
    $('.video-prev').show();
});
$('.video-cancel').on('click',function () {
    $('.video-prev').hide();
})
/*----------X------------X-----------*/




// our clients  slide --------------------
$('.client-slide').owlCarousel({
    loop:true,
    margin:10,
    items:1,
    nav:true,
    autoplay:true,
    autoplayTimeout:5000,
});
/*----------X-----------X------------*/





// our team slide ------------------------
$('.team-slide').owlCarousel({
    loop:true,
    // nav:true,
    autoplay:true,
    autoplayTimeout:5000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        800:{
            items:2,
        },
        1000:{
            items:3,
        }
    }
})
/*----------X--------------X--------------*/





// FaQ's section ----------------------------
$( function() {
    $( ".faq-accordin" ).accordion({
        heightStyle: "content",
        active: 0,
        collapsible: true,
        event: "click",
    });
} );

// FaQ's v2 -----------
$( function() {
    $( ".faq-accordin-2" ).accordion({
        heightStyle: "content",
        active: false,
        collapsible: true,
        event: "click",
    });
} );


/*------------X---------------X----------------*/






// btn scrollTop smoth ---------------------------
$(window).on("scroll",function () {
    if ($(this).scrollTop() >= 200) {
        $(".scrollTop").addClass('active');
    }
    else{
        $(".scrollTop").removeClass('active');
    }
});


$(".scrollTop").on('click',function (e) {
    $("body,html").animate({
        scrollTop : 0,
    },1000);

    e.preventDefault();
})
/*------------X---------------X-----------------*/





});

