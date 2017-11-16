<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
$terms = selectall_terms_caratitip_only_one();
$title = $terms->titleTERMSTITIP;
$text = $terms->textTERMSTITIP;
$syarat = $terms->syaratTERMSTITIP;
$cara = $terms->caraTERMSTITIP;
?>
<main>
    <section>
        <div class="titip">
            <h3><?php echo $title;?></h3>
            <p class="order-steps">
                <?php echo $text;?>
            </p>

            <div class="terms">
                <h4>Syaratnya cukup mudah:</h4>
                <?php echo $syarat;?>
            </div>
            <div class="how-to">
                <h4>Cara titip sewa:</h4>
                <?php echo $cara;?>
            </div>
        </div>
    </section>
</main>

<aside class="sidebar">
    <div class="promo-sidebar wow bounceInUp" data-wow-delay="1.3s">
        <div class="bg">
            <h3>How to order?</h3>
            <a href="#" class="btn-hoopla" id="btn-order">Read here</a>
        </div>
    </div>
    <div class="promo-sidebar wow bounceInRight">
        <div class="bg" style="background: url(<?php echo base_url().$this->data['asfront'];?>img/kids.jpg)">
            <h3>Mau titip sewa di Hoopla?</h3>
            <a href="#" class="btn-hoopla" id="btn-titip">Klik di sini</a>
        </div>
    </div>
    <div class="cta-sidebar wow bounceInLeft" data-wow-delay="1.3s">
        <div>
            <h3><small class="coolgreen">Masih bingung?</small> Halo-in kami aja.</h3>
            <i class="fa fa-phone-square"></i> 0856 6765 1688
        </div>
    </div>
</aside>
