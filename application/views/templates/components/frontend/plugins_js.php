<script src="https://unpkg.com/tippy.js@1.2.0/dist/tippy.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script> new WOW().init(); </script>
<script src="<?php echo base_url().$this->data['asfront'];?>js/main.js"></script>
<?php
if ($plugins == 'home') { ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url().$this->data['asfront'];?>js/vanilla-tilt.min.js"></script>
<script src="<?php echo base_url().$this->data['asfront'];?>js/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true
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
  modal.setContent(document.querySelector('#ordering').innerHTML);

  document.querySelector('#btn-order').addEventListener('click', function() {
    modal.open();
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
<?php } ?>