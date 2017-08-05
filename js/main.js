

$(function() {

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

    var modal = new tingle.modal({
        footer: false,
        onOpen: function() {
            console.log("Try sikit ya heheh");
        }
    });

    var btn = document.querySelector('#modaal');
    var first = document.querySelector('#first');

    modal.setContent(first.innerHTML);

    btn.addEventListener('click', function() {
        modal.open();
    });

});
