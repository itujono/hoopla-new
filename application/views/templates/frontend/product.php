<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main>
    <section class="section" id="brands">
        <h4 title="Barang-barang fresh buat si kecil - berdasarkan nama brand">
            Berdasarkan <span class="coolgreen">brands name</span>
            <a href="#">Lihat selengkapnya</a>
        </h4>
        <div class="wrapper">
            <?php 
            if(!empty($listrentalbybrands)){
                foreach ($listrentalbybrands as $key => $rent) {
            ?>
            <div class="card">
                <div class="card-content">
                    <img src="<?php echo $rent->imageRENTAL;?>" alt="<?php echo $rent->namaRENTAL;?>">
                </div>
                <div class="card-bottom">
                    <a href="<?php echo base_url();?>product/detail/<?php echo base64_encode($rent->idRENTAL).'-'.seo_url($rent->namaRENTAL);?>">
                        <h3><?php echo $rent->namaRENTAL;?></h3>
                        <small>Rp. <?php echo number_format($rent->hargaRENTAL, 0,',','.'); ?></small>
                    </a>
                </div>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
    </section>
    <section class="section" id="category">
        <h4 title="Barang-barang fresh buat si kecil - berdasarkan kategori">
            Berdasarkan <span class="coolgreen">kategori</span>
            <a href="#">Lihat selengkapnya</a>
        </h4>
        <div class="wrapper">
            <?php 
            if(!empty($listrentalbycat)){
                foreach ($listrentalbycat as $key => $rentcat) {
            ?>
            <div class="card">
                <div class="card-content">
                    <img src="<?php echo $rentcat->imageRENTAL;?>" alt="<?php echo $rentcat->namaRENTAL;?>">
                </div>
                <div class="card-bottom">
                    <a href="<?php echo base_url();?>product/detail">
                        <h3><?php echo $rentcat->namaRENTAL;?></h3>
                        <small>Rp. <?php echo number_format($rentcat->hargaRENTAL, 0,',','.'); ?></small>
                    </a>
                </div>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
    </section>
    <section class="section" id="age">
        <h4 title="Mainan paling cute buat si kecil">
            Berdasarkan <span class="coolgreen">umur</span>
            <a href="#">Lihat selengkapnya</a>
        </h4>
        <div class="wrapper">
            <?php 
            if(!empty($listrentalbyage)){
                foreach ($listrentalbyage as $key => $age) {
            ?>
            <div class="card">
                <div class="card-content">
                    <img src="<?php echo $age->imageRENTAL;?>" alt="<?php echo $age->namaRENTAL;?>">
                </div>
                <div class="card-bottom">
                    <a href="<?php echo base_url();?>product/detail">
                        <h3><?php echo $age->namaRENTAL;?></h3>
                        <small>Rp. <?php echo number_format($age->hargaRENTAL, 0,',','.'); ?></small>
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
        <form method="post" name="formfiler" action="<?php echo base_url();?>product/filterby">
        <select name="filter" required="required">
            <option value="az">Brand (A-Z)</option>
            <option value="za">Brand (Z-A)</option>
            <option value="category">Kategori</option>
            <option value="age1">Umur (0-2)</option>
            <option value="age2">Umur (3-6)</option>
            <option value="age3">Umur (7-10)</option>
        </select>
        <button type="submit" class="btn-hoopla">Okay, Filter!</button>
        </form>
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