<script src="https://unpkg.com/tippy.js@1.2.0/dist/tippy.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script> new WOW().init(); </script>
<script src="<?php echo base_url().$this->data['asfront'];?>js/main.js"></script>
<?php
if ($plugins == 'home') { ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js"></script>
<script src="<?php echo base_url().$this->data['asfront'];?>js/owl.carousel.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            dots: true,
        });
    });
</script>

<script> new WOW().init(); </script>
<script src="<?php echo base_url().$this->data['asfront'];?>js/tingle.min.js"></script>

<script>
    var modal = new tingle.modal({ cssClass: ['ordering'] });
    var modalTitip = new tingle.modal({ cssClass: ['titip'] });
    var btnTitip = document.querySelector('#btn-titip');


    modal.setContent(document.querySelector('#ordering').innerHTML);
    document.querySelector('#btn-order').addEventListener('click', function(e) {
        modal.open(); e.preventDefault();
    });

    modalTitip.setContent(document.querySelector('#titip').innerHTML);
    btnTitip.addEventListener('click', function(e) { modalTitip.open(); e.preventDefault(); });
</script>

<?php
} elseif ($plugins == 'about') {
?>
<?php
} elseif ($plugins == 'product') {
?>
<script src="<?php echo base_url().$this->data['asfront'];?>js/tingle.min.js"></script>

<script>
    var modal = new tingle.modal({ cssClass: ['ordering'] });
    var formOrder = new tingle.modal({ cssClass: ['#form-order'] });
    var modalTitip = new tingle.modal({ cssClass: ['titip'] });
    var btnTitip = document.querySelector('#btn-titip');

    modal.setContent(document.querySelector('#ordering').innerHTML);
    document.querySelector('#btn-order').addEventListener('click', function(e) {
        modal.open(); e.preventDefault();
    });

    modalTitip.setContent(document.querySelector('#titip').innerHTML);
    btnTitip.addEventListener('click', function(e) { modalTitip.open(); e.preventDefault(); });

    formOrder.setContent(document.querySelector('#form-order').innerHTML);
    document.querySelector('#rent-now').addEventListener('click', function(e) {
        formOrder.open(); e.preventDefault();
    });
</script>

<script>
    var showSK = document.querySelector('#show-tc');
    var tc = document.querySelector('#terms-conditions');

    showSK.addEventListener('click', function(e) {
        if (!tc.classList.contains('active')) {
            tc.classList.add('active');
            showSK.innerHTML = "Tutup S & K";
            e.preventDefault();
        } else {
            tc.classList.remove('active');
            showSK.innerHTML = "Lihat S & K";
        }
    });
</script>

<script>
  tippy('.social a', {
    followCursor: true,
    position: 'bottom'
  });
</script>

<?php
} elseif ($plugins == 'terms') {
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
  tippy('.social a', {
    followCursor: true,
    position: 'bottom'
  });
</script>

<script>
  $(window).scroll(function() {
    if ($(window).scrollTop() > 320 ) {
      $(".links").addClass("gotop");
    } else {
      $(".links").removeClass("gotop");
    }
  });
</script>
<?php
} elseif ($plugins == 'sale') {
?>
<script src="<?php echo base_url().$this->data['asfront'];?>js/tingle.min.js"></script>
<script>
  var modal = new tingle.modal({ cssClass: ['ordering'] });
  var modalTitip = new tingle.modal({ cssClass: ['titip'] });
  var btnTitip = document.querySelector('#btn-titip');
  modal.setContent(document.querySelector('#ordering').innerHTML);
    document.querySelector('#btn-order').addEventListener('click', function(e) {
        modal.open(); e.preventDefault();
    });

    modalTitip.setContent(document.querySelector('#titip').innerHTML);
    btnTitip.addEventListener('click', function(e) { modalTitip.open(); e.preventDefault(); });
</script>
<?php
} elseif ($plugins == 'form') { /*PLugin buat page Form*/
?>
<script src="<?php echo base_url().$this->data['asfront'];?>js/tingle.min.js"></script>
<script>
  var modal = new tingle.modal({ cssClass: ['ordering'] });
  var modalTitip = new tingle.modal({ cssClass: ['titip'] });
  var btnTitip = document.querySelector('#btn-titip');
  modal.setContent(document.querySelector('#ordering').innerHTML);
    document.querySelector('#btn-order').addEventListener('click', function(e) {
        modal.open(); e.preventDefault();
    });

    modalTitip.setContent(document.querySelector('#titip').innerHTML);
    btnTitip.addEventListener('click', function(e) { modalTitip.open(); e.preventDefault(); });
</script>
<?php
} elseif ($plugins == 'contact') {
?>
<script type="text/javascript">
    tippy('.social a', {
        followCursor: true,
        position: 'bottom'
    });
</script>
<?php
} elseif ($plugins == 'product-detail') { /* Plugin dan Script buat Page Product-Detail */
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.3/js/lightgallery-all.min.js"></script>
<script src="<?php echo base_url().$this->data['asfront'];?>js/tingle.min.js"></script>

<script>
    $('#product-slider').lightSlider({
        gallery: true,
        item: 1,
        // autoWidth:true,
        slideMargin: 0,
        enableDrag: true,
        enableTouch: true,
        thumbItem: 6
    });

    $('#product-slider').lightGallery({
        share: false,
        actualSize: false,
        autoplay: false,
        autoplayControls: false
    });
</script>

<script>
    var formOrder = new tingle.modal();

    formOrder.setContent(document.querySelector('#form-order').innerHTML);
    document.querySelector('#rent-now').addEventListener('click', function(e) {
        formOrder.open(); e.preventDefault();
    });
</script>
<script>
    var modal = new tingle.modal({ cssClass: ['ordering'] });
    var modalTitip = new tingle.modal({ cssClass: ['titip'] });
    var btnTitip = document.querySelector('#btn-titip');
    modal.setContent(document.querySelector('#ordering').innerHTML);
    document.querySelector('#btn-order').addEventListener('click', function(e) {
        modal.open(); e.preventDefault();
    });

    modalTitip.setContent(document.querySelector('#titip').innerHTML);
    btnTitip.addEventListener('click', function(e) { modalTitip.open(); e.preventDefault(); });
</script>

<script>
    var showSK = document.querySelector('#show-tc');
    var tc = document.querySelector('#terms-conditions');

    showSK.addEventListener('click', function(e) {
        if (!tc.classList.contains('active')) {
            tc.classList.add('active');
            showSK.innerHTML = "Tutup S & K";
            e.preventDefault();
        } else {
            tc.classList.remove('active');
            showSK.innerHTML = "Lihat S & K";
        }
    });
</script>

<script>
  tippy('.social a', {
    followCursor: true,
    position: 'bottom'
  });
</script>
<?php } elseif ($plugins == 'discount') { ?>
<script src="<?php echo base_url().$this->data['asfront'];?>js/tingle.min.js"></script>
<script>
    // Declare Tingle's vars
    var modal = new tingle.modal({ cssClass: ['modaler'] });
    var modalSecond = new tingle.modal({ cssClass: ['modaler'] });

    // Tingle's setContent
    modal.setContent(document.querySelector('#first').innerHTML);
    modalSecond.setContent(document.querySelector('#second').innerHTML);

    // Tingle's Event Listeners
    document.querySelector('#modaal').addEventListener('click', function(e) {
        e.preventDefault();
        modal.open();
    });
    document.querySelector('#modaal-second').addEventListener('click', function(e) {
        e.preventDefault();
        modalSecond.open();
    });
</script>
<?php } ?>
