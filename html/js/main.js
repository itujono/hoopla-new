var carousel = document.querySelector('.carousel');
var cart = document.querySelector(".cart");
var btn = document.querySelector("#btn-cart");
var btnClose = document.querySelector("#btn-cart-close");



function showCart(e) {
    if (!cart.classList.contains("clicked")) {
        e.preventDefault();
        cart.classList.add("clicked");
        btn.classList.add("moved");
        btnClose.style.display = "block";
        btn.setAttribute('href', 'cart.html');
    } else {
        cart.classList.remove("clicked");
        btn.classList.remove("moved");
        btnClose.style.display = "none";
    }
}

function hideCart() {
    cart.classList.remove("clicked");
    btnClose.style.display = "none";
    btn.classList.remove("moved");
}

btn.addEventListener("click", showCart);
btnClose.addEventListener("click", hideCart);

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
var flkty = new Flickity( carousel, {
    imagesLoaded: true,
    pageDots: true,
});
