<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main>
    <div class="demooo">
        <ul id="product-slider" class="owl-carousel owl-theme">
            <?php if(!empty($getrental->map)){
                foreach ($getrental->map as $key => $val_img) {
            ?>
            <li class="item">
                <a href="<?php echo $val_img; ?>" data-fancybox="group" data-caption="<?php echo $getrental->namaRENTAL;?>">
                    <img src="<?php echo $val_img; ?>" alt="<?php echo $getrental->namaRENTAL;?>">
                </a>
            </li>
            <?php } ?>
            <?php } ?>
        </ul>
    </div>
    <div class="product-description">
        <h2 class="title"><?php echo $getrental->namaRENTAL;?></h2>
        <h4 class="price">Rp. <?php echo number_format($getrental->harga2RENTAL, 0,',','.'); ?>
            <small>/  2 Minggu</small>
        </h4>
        <div class="infos">
            <div class="minimum">
                <div>
                    <span><i class="fa fa-clock-o"></i></span>
                </div>
                <div>
                    <p>Per 2 minggu</p>
                    <h4><?php echo number_format($getrental->harga2RENTAL, 0,',','.'); ?></h4>
                </div>
            </div>
            <div class="minimum">
                <div>
                    <span><i class="fa fa-clock-o"></i></span>
                </div>
                <div>
                    <p>Per 4 minggu</p>
                    <h4><?php echo number_format($getrental->harga4RENTAL, 0,',','.'); ?></h4>
                </div>
            </div>
        </div>
        <p class="description"><?php echo $getrental->descriptionRENTAL;?></p>
        <p class="category">Kategori: <a href="#"><?php echo $getrental->namaBRAND;?></a></p>
    </div>
    <section class="similar">
        <h4>Produk Sejenis</h4>
        <div class="wrapper">
            <?php
                if(!empty($similarental)){
                foreach ($similarental as $key => $similar) {
            ?>
            <div class="card">
                <div class="card-content">
                    <img src="<?php echo $similar->imageRENTAL;?>" alt="<?php echo $similar->namaRENTAL;?>">
                </div>
                <div class="card-bottom">
                    <a href="<?php echo base_url();?>product/detail/<?php echo base64_encode($similar->idRENTAL).'-'.seo_url($similar->namaRENTAL);?>">
                        <h3><?php echo $similar->namaRENTAL;?></h3>
                        <small>Rp. <?php echo number_format($similar->harga2RENTAL, 0,',','.'); ?></small>
                    </a>
                </div>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
    </section>
</main>

<aside class="sidebar">
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
