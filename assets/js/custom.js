// NAVIGATION
initializeStellarNav(1, '.main_menu');
function initializeStellarNav(index, element) {
	$(element).stellarNav({
		breakpoint: 1024,
		position: 'left'
	});
}

// Full Screne Search Bar
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}

// INDEX SECTION1 SLIDER JS
$('.indexSec1-slider').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    navText : ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

// TESTIMONIALS SLIDER JS
$('.testimonial-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});

// ADD TO CART BUTTON
document.querySelectorAll('.add-to-cart').forEach(button => {
  button.addEventListener('click', e => {
    button.classList.add('added');
  });
});


// PRODUCT FILTERS JS
$(".filter-title").click(function(){
  $(this).next().stop(true).slideToggle("active");
  // $(".filter-title i").toggleClass("rotate");
});

$(".filter-title i").click(function(){
  $(this).toggleClass("rotate");
});

// DROPDOWN TWO JS
$(".filter-item").click(function(){
  $(this).next().stop(true).slideToggle("active");
});

$(".filter-item i").click(function(){
  $(this).toggleClass("rotate");
});

// FILTER SIDE BAR BUTTON JS
$(".filter-btn").click(function(){
  $('aside').toggleClass("show");
});

//PRODUCT QUANTITY SELECT INPUT
$(document).ready(function(){
  $('.count').prop('disabled', false);
  $(document).on('click','.plus',function(){
   $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) + 1 );
 });
  $(document).on('click','.minus',function(){
    $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) - 1 );
    if ($(this).siblings('.count').val() == 0) {
      $(this).siblings('.count').val(1);
    }
  });
});

// PRODUCT DETAILS SLIDER JS
// Params
let mainSliderSelector = '.main-slider',
navSliderSelector = '.nav-slider',
interleaveOffset = 0.5;

// Main Slider
let mainSliderOptions = {
  loop: true,
  speed:1000,
  autoplay:{
    delay:3000
  },
  loopAdditionalSlides: 10,
  grabCursor: true,
  watchSlidesProgress: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  on: {
    init: function(){
      this.autoplay.stop();
    },
    imagesReady: function(){
      this.el.classList.remove('loading');
      this.autoplay.start();
    },
    progress: function(){
      let swiper = this;
      for (let i = 0; i < swiper.slides.length; i++) {
        let slideProgress = swiper.slides[i].progress,
        innerOffset = swiper.width * interleaveOffset,
        innerTranslate = slideProgress * innerOffset;

        swiper.slides[i].querySelector(".slide-bgimg").style.transform =
        "translateX(" + innerTranslate + "px)";
      }
    },
    touchStart: function() {
      let swiper = this;
      for (let i = 0; i < swiper.slides.length; i++) {
        swiper.slides[i].style.transition = "";
      }
    },
    setTransition: function(speed) {
      let swiper = this;
      for (let i = 0; i < swiper.slides.length; i++) {
        swiper.slides[i].style.transition = speed + "ms";
        swiper.slides[i].querySelector(".slide-bgimg").style.transition =
        speed + "ms";
      }
    }
  }
};
let mainSlider = new Swiper(mainSliderSelector, mainSliderOptions);

// Navigation Slider
let navSliderOptions = {
  loop: true,
  loopAdditionalSlides: 10,
  speed:1000,
  spaceBetween: 5,
  slidesPerView: 5,
  centeredSlides : true,
  touchRatio: 0.2,
  slideToClickedSlide: true,
  direction: 'vertical',
  on: {
    imagesReady: function(){
      this.el.classList.remove('loading');
    },
    click: function(){
      mainSlider.autoplay.stop();
    }
  }
};
let navSlider = new Swiper(navSliderSelector, navSliderOptions);

// Matching sliders
mainSlider.controller.control = navSlider;
navSlider.controller.control = mainSlider;