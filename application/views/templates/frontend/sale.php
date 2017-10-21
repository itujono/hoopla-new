<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php
    if(!empty($searching)){
?>
<main>
    <section class="section" id="mom">
        <h4 title="Barang-barang sale buat si kecil - Pencarian">
            Pencarian
        </h4>
        <div class="wrapper">
            <?php 
            if(!empty($searching)){
                foreach ($searching as $key => $src) {
            ?>
            <div class="card">
                <div class="card-content">
                    <img src="<?php echo $src->imageSALE;?>" alt="<?php echo $src->namaSALE;?>">
                </div>
                <div class="card-bottom">
                    <a href="<?php echo base_url();?>sale/detail/<?php echo base64_encode($src->idSALE).'-'.seo_url($src->namaSALE);?>">
                        <h3><?php echo $src->namaSALE;?></h3>
                        <small>Rp. <?php echo number_format($src->hargaSALE, 0,',','.'); ?></small>
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
    <section class="section" id="mom">
        <h4 title="Barang-barang sale buat si kecil - Pencarian">
            Pencarian
        </h4>
        <div class="wrapper">
            <?php 
            if(!empty($searchsortby)){
                foreach ($searchsortby as $key => $sort) {
            ?>
            <div class="card">
                <div class="card-content">
                    <img src="<?php echo $sort->imageSALE;?>" alt="<?php echo $sort->namaSALE;?>">
                </div>
                <div class="card-bottom">
                    <a href="<?php echo base_url();?>product/detail/<?php echo base64_encode($sort->idSALE).'-'.seo_url($sort->namaSALE);?>">
                        <h3><?php echo $sort->namaSALE;?></h3>
                        <small>Rp. <?php echo number_format($sort->hargaSALE, 0,',','.'); ?></small>
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
	<?php 
	if(!empty($getcatsale)){
		foreach ($getcatsale as $key => $cat) {
	?>
	<section class="section" id="mom">
		<h4 title="Barang-barang untuk dijual - <?php echo strtolower($cat->namaCATSALE); ?>">
			<!-- Buat <span class="coolgreen">mama</span> -->
			<span class="coolgreen"><?php echo strtolower($cat->namaCATSALE); ?></span>
		</h4>
		<div class="wrapper">
			<?php
			if(!empty($listsale)){
				foreach ($listsale as $key => $sale) {
					if($cat->idCATSALE == $sale->idCATSALE){
			?>
			<div class="card">
				<div class="card-content">
					<img src="<?php echo $sale->imageSALE;?>" alt="<?php echo $sale->namaSALE;?>">
				</div>
				<div class="card-bottom">
					<a href="<?php echo base_url();?>sale/detail/<?php echo base64_encode($sale->idSALE).'-'.seo_url($sale->namaSALE);?>">
						<h3><?php echo $sale->namaSALE;?></h3>
						<small>Rp. <?php echo number_format($sale->hargaSALE, 0,',','.'); ?></small>
					</a>
				</div>
			</div>
			<?php } ?>
			<?php } ?>
			<?php } ?>
		</div>
	</section>
	<?php } ?>
	<?php } ?>
</main>
<?php } ?>

<aside class="sidebar">
    <div class="sort">
        <h4>Filter by:</h4>
        <form method="get" name="formfilter" action="<?php echo base_url();?>sale/filterby">
        <select name="filter" required="required">
            <option value="az">Brand (A-Z)</option>
            <option value="za">Brand (Z-A)</option>
            <option value="category">Kategori</option>
        </select>
        <button type="submit" class="btn-hoopla">Okay, Filter!</button>
        </form>
    </div>
    <div class="sort">
        <h4>Sort by:</h4>
        <form method="get" name="formsortby" action="<?php echo base_url();?>sale/sortby">
        <select name="sortby" required="required">
            <option value="trending">Trending</option>
            <option value="highlow">Harga (tinggi ke rendah)</option>
            <option value="lowhigh">Harga (rendah ke tinggi)</option>
            <option value="date">Tanggal dimasukkan</option>
        </select>
        <button type="submit" class="btn-hoopla">Okay, Sortir!</button>
        </form>
    </div>
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