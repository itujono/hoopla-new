<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
    if(!empty($searching)){
?>
<main>
    <section class="section" id="brands">
        <h4 title="Barang-barang fresh buat si kecil - Pencarian">
            Pencarian
        </h4>
        <div class="wrapper">
            <?php 
            if(!empty($searching)){
                foreach ($searching as $key => $src) {
            ?>
            <div class="card">
                <div class="card-content">
                    <img src="<?php echo $src->imageRENTAL;?>" alt="<?php echo $src->namaRENTAL;?>">
                </div>
                <div class="card-bottom">
                    <a href="<?php echo base_url();?>product/detail/<?php echo base64_encode($src->idRENTAL).'-'.seo_url($src->namaRENTAL);?>">
                        <h3><?php echo $src->namaRENTAL;?></h3>
                        <small>Rp. <?php echo number_format($src->hargaRENTAL, 0,',','.'); ?></small>
                    </a>
                </div>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
    </section>
</main>
<?php } else if(!empty($searchsortby)) { ?>
<main>
    <section class="section" id="brands">
        <h4 title="Barang-barang fresh buat si kecil - Pencarian">
            Pencarian
        </h4>
        <div class="wrapper">
            <?php 
            if(!empty($searchsortby)){
                foreach ($searchsortby as $key => $sort) {
            ?>
            <div class="card">
                <div class="card-content">
                    <img src="<?php echo $sort->imageRENTAL;?>" alt="<?php echo $sort->namaRENTAL;?>">
                </div>
                <div class="card-bottom">
                    <a href="<?php echo base_url();?>product/detail/<?php echo base64_encode($sort->idRENTAL).'-'.seo_url($sort->namaRENTAL);?>">
                        <h3><?php echo $sort->namaRENTAL;?></h3>
                        <small>Rp. <?php echo number_format($sort->hargaRENTAL, 0,',','.'); ?></small>
                    </a>
                </div>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
    </section>
</main>
<?php } else { ?>
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
<?php } ?>
<aside class="sidebar">
    <div class="sort">
        <h4>Filter by:</h4>
        <form method="get" name="formfiler" action="<?php echo base_url();?>product/filterby">
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
        <form method="get" name="formsortby" action="<?php echo base_url();?>product/sortby">
        <select name="sortbrand">
            <option value="" selected="selected" disabled="disabled">Pilih Brand</option>
            <?php 
            if(!empty($getbrand)){ 
                foreach ($getbrand as $brand) {
            ?>
            <option value="<?php echo $brand->idBRAND;?>"><?php echo $brand->namaBRAND;?></option>
                <?php } ?>
            <?php } ?>
        </select>
        <select name="sorttype">
            <option value="" selected="selected" disabled="disabled">Pilih Type</option>
            <?php 
            if(!empty($gettype)){ 
                foreach ($gettype as $type) {
            ?>
            <option value="<?php echo $type->idTYPE;?>"><?php echo $type->namaTYPE;?></option>
                <?php } ?>
            <?php } ?>
        </select>
        <select name="sortage">
            <option value="" selected="selected" disabled="disabled">Pilih Umur</option>
            <?php 
            if(!empty($getage)){ 
                foreach ($getage as $age) {
            ?>
            <option value="<?php echo $age->idAGE;?>"><?php echo $age->namaAGE;?></option>
                <?php } ?>
            <?php } ?>
        </select>
        <button type="submit" class="btn-hoopla">Okay, Sortir!</button>
        </form>
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