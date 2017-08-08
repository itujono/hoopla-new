var carousel = document.querySelector('.carousel');
var cart = document.querySelector(".cart");
var btn = document.querySelector("#btn-cart");

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





// Tingle's Event Listeners
document.querySelector('#modaal').addEventListener('click', function() { modal.open(); });
document.querySelector('#modaal-second').addEventListener('click', function() { modalSecond.open(); });

// Tingle's setContent
modal.setContent(document.querySelector('#first').innerHTML);
modalSecond.setContent(document.querySelector('#second').innerHTML);


// Flickity
var flkty = new Flickity( carousel, {
    imagesLoaded: true,
    pageDots: true,
});

// Declare Tingle's vars
var modal = new tingle.modal({ cssClass: ['modaler'] });
var modalSecond = new tingle.modal({ cssClass: ['modaler'] });
