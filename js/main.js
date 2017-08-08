var cart = document.querySelector(".cart");
var btn = document.querySelector("#btn-cart");
var carousel = document.querySelector('.carousel');




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

function showCart() {
    if (!cart.classList.contains("clicked")) {
        cart.classList.add("clicked");
        btn.classList.add("moved");
    } else {
        cart.classList.remove("clicked");
        btn.classList.remove("moved");
    }
}


btn.addEventListener("click", showCart);









var flkty = new Flickity( carousel, {
    imagesLoaded: true,
    pageDots: true,
});
