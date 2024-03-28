/**
 * 
 * the carousels made by owlcarousel 
 * 
 */




$(document).ready(function(){
    "use strict";
    // initLightbox();

    /**
     * 
     * 1. Hero section landing owl carousel
     * 
     */
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay: true,
        autoplayTimeout : 3000, //1s
        autoplayHoverPause : true,
        items:1, //to display only 1 item
        responsive: {
            0 : {
                items:1
            },
            600 : {
                items:1
            },
            1000 : {
                items:1
            }
        }
    });

    /**
     * 
     * 2. Layanan Jasa Service slick js
     * 
     */

    $('.layanan-jasa').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true, 
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
        infinite: true,
        centerMode : false,
        centerPadding: '60px',
        responsive: [
            {
              breakpoint: 985,
              settings: {
                arrows: false,
                centerMode: false,
                centerPadding: '40px',
                slidesToShow: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerMode: false,
                centerPadding: '40px',
                slidesToShow: 1
              }
            }
          ]
    }); 

    /**
     * 
     * 3. portofolio slider -> slick js
     * 
     */

    $('.portofolio-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
        centerMode : false,
        centerPadding: '60px',
        responsive: [
            {
              breakpoint: 985,
              settings: {
                arrows: false,
                centerMode: false,
                centerPadding: '40px',
                slidesToShow: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerMode: false,
                centerPadding: '40px',
                slidesToShow: 1
              }
            }
          ]
    }); 

    /**
     * 
     * 4. Testimoni slider
     * 
     */
    $('.testimoni-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
        centerMode : false,
        centerPadding: '60px',
        responsive: [
            {
              breakpoint: 985,
              settings: {
                arrows: false,
                centerMode: false,
                centerPadding: '40px',
                slidesToShow: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerMode: false,
                centerPadding: '40px',
                slidesToShow: 1
              }
            }
          ]
    }); 

    /**
     * 
     * 5. Lighboxt gallery portolio landing
     * 
     */
    $('a.gallery-portofolio').colorbox({
        // rel:'gallery-portofolio', 
        maxWidth: "90%",
        maxHeight: "90%",
    });

    /**
     * 
     * 6. Lightbox gallery testimoni landing
     * 
     */
    $('a.gallery-testimoni-landing').colorbox({
        // rel: 'testimoni',

        maxWidth : "90%",
        maxHeight : "90%",
    });

    /**
     * 
     * 7. Layanan Jasa Service slick js
     * 
     */

    $('.blog-section').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true, 
      autoplaySpeed: 2000,
      dots: false,
      arrows: false,
      infinite: true,
      centerMode : false,
      centerPadding: '60px',
      responsive: [
          {
            breakpoint: 985,
            settings: {
              arrows: false,
              centerMode: false,
              centerPadding: '40px',
              slidesToShow: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: false,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
  }); 

});

