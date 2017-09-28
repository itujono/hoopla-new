<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
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
					<a href="<?php echo base_url();?>product/detail">
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
	<!-- <section class="section" id="baby">
		<h4 title="Barang-barang untuk dijual - untuk si kecil">
			Untuk <span class="coolgreen">baby</span>
		</h4>
		<div class="wrapper">
			<div class="card">
				<div class="card-content">
					<img src="<?php echo base_url().$this->data['asfront'];?>img/kids7.png" alt="Kiddy">
				</div>
				<div class="card-bottom">
					<a href="product-detail.html">
						<h3>Super sempardak</h3>
						<small>Rp 300k</small>
					</a>
				</div>
			</div>
			<div class="card">
				<div class="card-content softblue">
					<img src="<?php echo base_url().$this->data['asfront'];?>img/kids7.png" alt="Kiddy">
				</div>
				<div class="card-bottom">
					<a href="product-detail.html">
						<h3>Super sempardak</h3>
						<small>Rp 300k</small>
					</a>
				</div>
			</div>
			<div class="card">
				<div class="card-content">
					<img src="<?php echo base_url().$this->data['asfront'];?>img/kids7.png" alt="Kiddy">
				</div>
				<div class="card-bottom">
					<a href="product-detail.html">
						<h3>Super sempardak</h3>
						<small>Rp 300k</small>
					</a>
				</div>
			</div>
			<div class="card">
				<div class="card-content softpurple">
					<img src="<?php echo base_url().$this->data['asfront'];?>img/kids7.png" alt="Kiddy">
				</div>
				<div class="card-bottom">
					<a href="product-detail.html">
						<h3>Super sempardak</h3>
						<small>Rp 300k</small>
					</a>
				</div>
			</div>
			<div class="card">
				<div class="card-content softpurple">
					<img src="<?php echo base_url().$this->data['asfront'];?>img/kids7.png" alt="Kiddy">
				</div>
				<div class="card-bottom">
					<a href="product-detail.html">
						<h3>Super sempardak</h3>
						<small>Rp 300k</small>
					</a>
				</div>
			</div>
			<div class="card">
				<div class="card-content">
					<img src="<?php echo base_url().$this->data['asfront'];?>img/kids7.png" alt="Kiddy">
				</div>
				<div class="card-bottom">
					<a href="product-detail.html">
						<h3>Super sempardak</h3>
						<small>Rp 300k</small>
					</a>
				</div>
			</div>
			<div class="card">
				<div class="card-content softblue">
					<img src="<?php echo base_url().$this->data['asfront'];?>img/kids7.png" alt="Kiddy">
				</div>
				<div class="card-bottom">
					<a href="product-detail.html">
						<h3>Super sempardak</h3>
						<small>Rp 300k</small>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="section" id="toys">
		<h4 title="Mainan untuk dijual">
			Mainan untuk <span class="coolgreen">si kecil</span>
		</h4>
		<div class="wrapper">
			<div class="card">
				<div class="card-content">
					<img src="<?php echo base_url().$this->data['asfront'];?>img/kids7.png" alt="Kiddy">
				</div>
				<div class="card-bottom">
					<a href="product-detail.html">
						<h3>Super sempardak</h3>
						<small>Rp 300k</small>
					</a>
				</div>
			</div>
			<div class="card">
				<div class="card-content softblue">
					<img src="<?php echo base_url().$this->data['asfront'];?>img/kids7.png" alt="Kiddy">
				</div>
				<div class="card-bottom">
					<a href="product-detail.html">
						<h3>Super sempardak</h3>
						<small>Rp 300k</small>
					</a>
				</div>
			</div>
			<div class="card">
				<div class="card-content">
					<img src="<?php echo base_url().$this->data['asfront'];?>img/kids7.png" alt="Kiddy">
				</div>
				<div class="card-bottom">
					<a href="product-detail.html">
						<h3>Super sempardak</h3>
						<small>Rp 300k</small>
					</a>
				</div>
			</div>
			<div class="card">
				<div class="card-content softpurple">
					<img src="<?php echo base_url().$this->data['asfront'];?>img/kids7.png" alt="Kiddy">
				</div>
				<div class="card-bottom">
					<a href="product-detail.html">
						<h3>Super sempardak</h3>
						<small>Rp 300k</small>
					</a>
				</div>
			</div>
			<div class="card">
				<div class="card-content softpurple">
					<img src="<?php echo base_url().$this->data['asfront'];?>img/kids7.png" alt="Kiddy">
				</div>
				<div class="card-bottom">
					<a href="product-detail.html">
						<h3>Super sempardak</h3>
						<small>Rp 300k</small>
					</a>
				</div>
			</div>
			<div class="card">
				<div class="card-content">
					<img src="<?php echo base_url().$this->data['asfront'];?>img/kids7.png" alt="Kiddy">
				</div>
				<div class="card-bottom">
					<a href="product-detail.html">
						<h3>Super sempardak</h3>
						<small>Rp 300k</small>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="section" id="snacks">
		<h4 title="Snack dan makanan untuk dijual">
			Snack dan <span class="coolgreen">makanan</span>
		</h4>
		<div class="wrapper">
			<div class="card">
				<div class="card-content">
					<img src="<?php echo base_url().$this->data['asfront'];?>img/kids7.png" alt="Kiddy">
				</div>
				<div class="card-bottom">
					<a href="product-detail.html">
						<h3>Super sempardak</h3>
						<small>Rp 300k</small>
					</a>
				</div>
			</div>
			<div class="card">
				<div class="card-content softblue">
					<img src="<?php echo base_url().$this->data['asfront'];?>img/kids7.png" alt="Kiddy">
				</div>
				<div class="card-bottom">
					<a href="product-detail.html">
						<h3>Super sempardak</h3>
						<small>Rp 300k</small>
					</a>
				</div>
			</div>
			<div class="card">
				<div class="card-content">
					<img src="<?php echo base_url().$this->data['asfront'];?>img/kids7.png" alt="Kiddy">
				</div>
				<div class="card-bottom">
					<a href="product-detail.html">
						<h3>Super sempardak</h3>
						<small>Rp 300k</small>
					</a>
				</div>
			</div>
			<div class="card">
				<div class="card-content softpurple">
					<img src="<?php echo base_url().$this->data['asfront'];?>img/kids7.png" alt="Kiddy">
				</div>
				<div class="card-bottom">
					<a href="product-detail.html">
						<h3>Super sempardak</h3>
						<small>Rp 300k</small>
					</a>
				</div>
			</div>
			<div class="card">
				<div class="card-content softpurple">
					<img src="<?php echo base_url().$this->data['asfront'];?>img/kids7.png" alt="Kiddy">
				</div>
				<div class="card-bottom">
					<a href="product-detail.html">
						<h3>Super sempardak</h3>
						<small>Rp 300k</small>
					</a>
				</div>
			</div>
			<div class="card">
				<div class="card-content">
					<img src="<?php echo base_url().$this->data['asfront'];?>img/kids7.png" alt="Kiddy">
				</div>
				<div class="card-bottom">
					<a href="product-detail.html">
						<h3>Super sempardak</h3>
						<small>Rp 300k</small>
					</a>
				</div>
			</div>
			<div class="card">
				<div class="card-content softblue">
					<img src="<?php echo base_url().$this->data['asfront'];?>img/kids7.png" alt="Kiddy">
				</div>
				<div class="card-bottom">
					<a href="product-detail.html">
						<h3>Super sempardak</h3>
						<small>Rp 300k</small>
					</a>
				</div>
			</div>
		</div>
	</section> -->
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
            <i class="fa fa-phone-square"></i> 0778 325 253
        </div>
    </div>
</aside>