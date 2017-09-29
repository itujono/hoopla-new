<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main>
    <div class="image">
        <img src="<?php echo $getsale->imageSALE;?>" alt="<?php echo $getsale->namaSALE;?>">
    </div>
    <div class="product-description">
        <h2 class="title"><?php echo $getsale->namaSALE;?></h3>
            <h4 class="price">Rp. <?php echo number_format($getsale->hargaSALE, 0,',','.'); ?></h4>
            <p class="description"><?php echo $getsale->descriptionSALE;?>
            </p>
            <p class="category">Kategori: <a href="#"><?php echo $getsale->namaCATSALE;?></a></p>
        </div>
        <section class="similar">
            <h4>Produk Sejenis</h4>
            <div class="wrapper">
            <?php
                if(!empty($similarsale)){
                    foreach ($similarsale as $key => $simsale) {
            ?>
                <div class="card">
                    <div class="card-content">
                        <img src="<?php echo $simsale->imageSALE;?>" alt="<?php echo $simsale->namaSALE;?>">
                    </div>
                    <div class="card-bottom">
                        <a href="<?php echo base_url();?>sale/detail/<?php echo base64_encode($simsale->idSALE).'-'.seo_url($simsale->namaSALE);?>">
                            <h3><?php echo $simsale->namaSALE;?></h3>
                            <small>Rp. <?php echo number_format($simsale->hargaSALE, 0,',','.'); ?></small>
                        </a>
                    </div>
                </div>
            <?php } ?>
            <?php } ?>
            </div>
        </section>
    </main>

    <aside class="sidebar">
        <div class="promo-sidebar wow bounceInUp" data-wow-delay="1.3s">
            <div class="bg">
                <h3>Mau order sekarang?</h3>
                <a href="#" class="btn-hoopla" id="btn-order">Klik di sini</a>
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
                <i class="fa fa-phone-square"></i> 0778 325 253
            </div>
        </div>
    </aside>
