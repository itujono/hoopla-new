var carousel = document.querySelector('.carousel');

var cart = document.querySelector(".cart");
var btn = document.querySelector("#btn-cart");

function showCart() {
    if (!cart.classList.contains("clicked")) {
        cart.classList.add("clicked");
        btn.classList.add("moved");
        console.log("Sempardak cart");
    } else {
        cart.classList.remove("clicked");
        btn.classList.remove("moved");
    }
}

btn.addEventListener("click", showCart);

////////////////////////////////////




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






// Flickity
var flkty = new Flickity( carousel, {
    imagesLoaded: true,
    pageDots: true,
});
