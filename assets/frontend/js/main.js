var carousel = document.querySelector('.carousel');

var btnClose = document.querySelector("#btn-cart-close");

////////////////////////////////////




tippy('.social a', {
    followCursor: true,
    position: 'bottom',
    arrow: true
});

tippy('section > h4', {
    position: 'top',
    followCursor: true,
    size: 'small',
    arrow: true,
    inertia: true
});






// Flickity
// var flkty = new Flickity( carousel, {
//     imagesLoaded: true,
//     pageDots: true,
// });
