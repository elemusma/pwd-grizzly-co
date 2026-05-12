jQuery(document).ready(function($) {

//     $('.testimonial-carousel').owlCarousel({
//     // center: true,
//     loop: true,
//     margin: 40,
//     nav: false,
//     dots: true,
//     // autoHeight: false,
//     // autoHeightClass: 'owl-height',
//     // stagePadding:170,
//     autoplay: false,
//     autoplayTimeout: 3500,
//     autoplaySpeed: 2000, // this seems to make it autoscroll
//     autoplayHoverPause: false,
//     animateIn: 'fadeIn',
//     animateOut: 'fadeOut',
//     // navText : ["<img src='/wp-content/uploads/2021/07/Arrow-Left-Blair-ITC.png' />","<img src='/wp-content/uploads/2021/07/Arrow-Right-Blair-ITC.png' />"],
//     responsive: {
//         0: {
//             items: 1,
//             // slideBy: 2
//         },
//         600: {
//             items: 1,
//             // slideBy: 3
//         },
//         1000: {
//             items: 3,
//             slideBy: 1
//         }
//     }
// });

$('.testimonial-carousel').owlCarousel({
    // center: true,
    loop: true,
    margin: 40,
    nav: true,
    dots: true,
    // autoHeight: false,
    // autoHeightClass: 'owl-height',
    // stagePadding:170,
    autoplay: false,
    autoplayTimeout: 3500,
    autoplaySpeed: 2000, // this seems to make it autoscroll
    autoplayHoverPause: false,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
	mouseDrag: false,   // 👈 disable dragging with mouse
  touchDrag: true,     // 👈 optionally leave touch on
    navText : ["<img src='/wp-content/uploads/chevron-circle-left.png' alt='' aria-hidden='true' />","<img src='/wp-content/uploads/chevron-circle-right.png' alt='' aria-hidden='true' />"],
    responsive: {
        0: {
            items: 1,
            // slideBy: 2
        },
        600: {
            items: 2,
            // slideBy: 3
        },
        1000: {
            items: 3,
            slideBy: 1
        }
    },
    onInitialized: addAriaLabels,
    onChanged: addAriaLabels
});

  $('.carousel-services').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    autoplay: false,
    navText: [
      "<img src='/wp-content/uploads/2025/11/Arrow-Left.png' alt='previous' />",
      "<img src='/wp-content/uploads/2025/11/Arrow-Right.png' alt='next' />"
    ],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  });

  $('.carousel-slider').owlCarousel({
    // center: true,
    loop: true,
    margin: 0,
    nav: true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 3500,
    autoplaySpeed: 5000, // this seems to make it autoscroll
    autoplayHoverPause: false,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    navText : ["<img src='https://resources.latinowebstudio.com/wp-content/uploads/2024/10/Arrow-Left-White-ITC.png' />","<img src='https://resources.latinowebstudio.com/wp-content/uploads/2024/10/Arrow-Right-White-ITC.png' />"],
    items:1,
    // responsive: {
    //     0: {
    //         items: 2,
    //         // slideBy: 2
    //     },
    //     600: {
    //         items: 3,
    //         // slideBy: 3
    //     },
    //     1000: {
    //         items: 4,
    //         // slideBy: 4
    //     }
    // }
});


/**
     * Add ARIA labels to the dots for accessibility
     */
function addAriaLabels(event) {
    var carousel = $(event.target);

    // Label dots (pagination)
    var dots = carousel.find('.owl-dot');
    dots.each(function(index) {
        var slideIndex = index + 1;
        $(this).attr('aria-label', 'Go to slide ' + slideIndex);
        $(this).attr('role', 'button');
    });

    // Label nav arrows
    var prevButton = carousel.find('.owl-prev');
    var nextButton = carousel.find('.owl-next');

    prevButton.attr('aria-label', 'Previous slide');
    prevButton.attr('role', 'button');

    nextButton.attr('aria-label', 'Next slide');
    nextButton.attr('role', 'button');
}



  });