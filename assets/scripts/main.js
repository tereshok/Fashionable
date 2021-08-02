(function( $ ) {
$(document).on('ready', ()=>{
  $('#special-slider').slick({
dots: false,
infinite: true,
speed: 300,
nextArrow: document.querySelector('#my-arrow-next'),
prevArrow: document.querySelector('#my-arrow-prev'),
slidesToShow: 1,
slidesToScroll: 1,
});

$('.image-item img').fancybox().attr("data-fancybox", "images");

$('.nav-button').click(function(){
  $('.mob-menu').toggleClass('hide');
})

});

})(jQuery);