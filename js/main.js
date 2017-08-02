
var carousel = document.querySelector('.carousel');
var flkty = new Flickity( carousel, {
    imagesLoaded: true,
    pageDots: true,
});

tippy('.social a', {
    followCursor: true,
    position: 'bottom'
});

tippy('section > h4', {
    position: 'top',
    followCursor: true,
    size: 'small',
    inertia: true
});
