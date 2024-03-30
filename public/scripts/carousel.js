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

    /**
     * 
     * 8. Count Down Promo Top - Ads
     */
    (function() {
      // "use strict";
    
      // more easy to catch the elemet of html dom
      const select = (el, all = false) => {
        el = el.trim()
        if (all) {
          return [...document.querySelectorAll(el)]
        } else {
          return document.querySelector(el)
        }
      }
    
      const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all)
        if (selectEl) {
          if (all) {
            selectEl.forEach(e => e.addEventListener(type, listener))
          } else {
            selectEl.addEventListener(type, listener)
          }
        }
      }

    
      let countdown = select('.countdown');
      const output = countdown.innerHTML;
    
      const countDownDate = function() {
        let timeleft = new Date(countdown.getAttribute('data-count')).getTime() - new Date().getTime();
    
        let days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
        let hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
    
        countdown.innerHTML = output.replace('%d', days).replace('%h', hours).replace('%m', minutes).replace('%s', seconds);
      }
    
      countDownDate();
      setInterval(countDownDate, 1000) 
    
    
    })();

});

