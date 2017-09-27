<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main>
    <div class="image">
        <img src="<?php echo $getrental->imageRENTAL;?>" alt="<?php echo $getrental->namaRENTAL;?>">
    </div>
    <div class="product-description">
        <h2 class="title"><?php echo $getrental->namaRENTAL;?></h3>
            <h4 class="price">Rp. <?php echo number_format($getrental->hargaRENTAL, 0,',','.'); ?>
            <small>/ <?php echo $getrental->durasiRENTAL;?></small>
            </h4>
            <div class="infos">
                <div class="minimum">
                    <div>
                        <span><i class="fa fa-clock-o"></i></span>
                    </div>
                    <div>
                        <p>Minimal sewa</p>
                        <h4><?php echo $getrental->durasiRENTAL;?></h4>
                    </div>
                </div>
                <div class="minimum">
                    <div>
                        <span><i class="fa fa-clock-o"></i></span>
                    </div>
                    <div>
                        <p>Minimal sewa</p>
                        <h4><?php echo $getrental->durasiRENTAL;?></h4>
                    </div>
                </div>
            </div>
            <p class="description"><?php echo $getrental->descriptionRENTAL;?>
            </p>
            <a href="#" class="btn-hoopla"><i class="fa fa-shopping-cart"></i> &nbsp; Tambahkan ke keranjang</a>
            <p class="category">Kategori: <a href="#"><?php echo $getrental->namaCATEGORY;?></a></p>
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
                            <small>Rp. <?php echo number_format($similar->hargaRENTAL, 0,',','.'); ?></small>
                        </a>
                    </div>
                </div>
            <?php } ?>
            <?php } ?>
            </div>
        </section>
    </main>

    <aside class="sidebar">
        <div class="sort">
            <h4>Filter by:</h4>
            <select>
                <option value="az">Brand (A-Z)</option>
                <option value="za">Brand (Z-A)</option>
                <option value="category">Kategori</option>
                <option value="age1">Umur (0-2)</option>
                <option value="age2">Umur (3-6)</option>
                <option value="age3">Umur 7-10)</option>
            </select>
            <a href="#" class="btn-hoopla">Submit</a>
        </div>
        <div class="sort">
            <h4>Sort by:</h4>
            <select>
                <option value="trending">Trending</option>
                <option value="high-low">Harga (tinggi ke rendah)</option>
                <option value="low-high">Harga (rendah ke tinggi)</option>
                <option value="date">Tanggal dimasukkan</option>
            </select>
            <a href="#" class="btn-hoopla">Submit</a>
        </div>
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