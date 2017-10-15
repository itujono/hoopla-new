<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main>
	<section class="main-news">
		<div class="owl-carousel wow bounceInUp" data-wow-delay=".2s">
			<div class="carousel-cell">
				<img src="<?php echo base_url().$this->data['asfront'];?>img/kids.jpg" alt="orange tree" />
				<div class="caption">
					<h3>Selamat datang di dunia Hoopla!</h3>
					<p>Pusatnya sewa perlengkapan dan mainan bayi dan anak di kota Batam</p>
					<a href="<?php echo base_url();?>product" class="btn-hoopla">Lihat lagi</a>
				</div>
			</div>
			<div class="carousel-cell">
				<img src="<?php echo base_url().$this->data['asfront'];?>img/kids1.png" alt="One World Trade" />
				<div class="caption">
					<h3>Don't be strangers<br></h3>
					<p>Follow IG kami @hoopla_rentalmainan dan mari berteman</p>
					<a href="#" class="btn-hoopla">Lihat</a>
				</div>
			</div>
			<div class="carousel-cell">
				<img src="<?php echo base_url().$this->data['asfront'];?>img/colorful-hands.png" alt="drizzle" />
				<div class="caption">
					<h3>Kalo bisa sewa, <br> kenapa harus beli?</h3>
					<p>Temukan kenapa menyewa adalah pilihan terbaik saat ini</p>
					<a href="<?php echo base_url();?>form" class="btn-hoopla">Lihat</a>
				</div>
			</div>
			<div class="carousel-cell">
				<img src="<?php echo base_url().$this->data['asfront'];?>img/babies.png" alt="cat nose" />
				<div class="caption">
					<h3>Tidak ada di list kami?</h3>
					<p>Well, silakan beritahu kami, dan akan kami sediakan untuk kamu</p>
					<a href="<?php echo base_url();?>contact" class="btn-hoopla">Selanjutnya</a>
				</div>
			</div>
			<div class="carousel-cell">
				<img src="<?php echo base_url().$this->data['asfront'];?>img/green-baby.png" alt="Green Baby" />
				<div class="caption">
					<h3>Cara pemesanan gampang.</h3>
					<p>Cukup dengan 4 langkah mudah, dan kamu sudah bisa menyewa semuanya di Hoopla.</p>
					<a href="<?php echo base_url();?>terms" class="btn-hoopla">Selengkapnya</a>
				</div>
			</div>
		</div>
		<div class="cta">
			<div class="image">
				<img src="<?php echo base_url().$this->data['asfront'];?>img/logo-text.png" alt="Logo CTA">
			</div>
			<h4>We bring <span class="coolgreen">happiness</span> to your home</h4>
			<img class="absolutely" src="<?php echo base_url().$this->data['asfront'];?>img/logo-image.png" alt="Logo image">
		</div>
	</section>
	<section class="main-news_small">
		<div class="wow bounceInUp">
			<h3>Paket Grow up with Hoopla</h3>
			<a href="<?php echo base_url();?>discount" class="btn-hoopla">Lihat</a>
		</div>
		<div style="background: url('<?php echo base_url().$this->data['asfront'];?>img/kid-laughing.jpg')" class="wow bounceInUp" data-wow-delay="1s">
			<h3>Paket Happy Moms!</h3>
			<a href="<?php echo base_url();?>discount" class="btn-hoopla">Lihat</a>
		</div>
		<div style="background: url('<?php echo base_url().$this->data['asfront'];?>img/bg1.jpg')" class="wow bounceInUp" data-wow-delay="1s">
			<h3>Makanan yang Mantap untuk Hiking</h3>
			<a href="<?php echo base_url();?>trivia" class="btn-hoopla">Lihat</a>
		</div>
	</section>
	<section class="most-recent">
		<h4 title="Barang-barang paling fresh di website ini">Most <span class="coolgreen">recent</span></h4>
		<div class="wrapper">
		<?php
			if(!empty($listrentalmostrecent)){
				foreach ($listrentalmostrecent as $key => $mr) {
		?>
			<div class="card">
				<div class="card-content">
				<img src="<?php echo $mr->imageRENTAL ?>" alt="<?php echo $mr->namaRENTAL ?>">
				</div>
				<div class="card-bottom">
					<a href="<?php echo base_url();?>product/detail/<?php echo base64_encode($mr->idRENTAL).'-'.seo_url($mr->namaRENTAL);?>">
						<h3><?php echo $mr->namaRENTAL ?></h3>
						<small>Rp. <?php echo number_format($mr->harga2RENTAL, 0,',','.'); ?></small>
					</a>
				</div>
			</div>
		<?php } ?>
		<?php } ?>
		</div>
	</section>
	<section class="most-popular">
		<h4 title="Barang-barang paling populer di website ini">Most <span class="coolgreen">popular</span></h4>
		<div class="wrapper">
		<?php
			if(!empty($listrentalmostpopular)){
				foreach ($listrentalmostpopular as $key => $mp) {
		?>
			<div class="card">
				<div class="card-content">
				<img src="<?php echo $mp->imageRENTAL ?>" alt="<?php echo $mp->namaRENTAL ?>">
				</div>
				<div class="card-bottom">
					<a href="<?php echo base_url();?>product/detail/<?php echo base64_encode($mp->idRENTAL).'-'.seo_url($mp->namaRENTAL);?>">
						<h3><?php echo $mp->namaRENTAL ?></h3>
						<small>Rp. <?php echo number_format($mp->harga2RENTAL, 0,',','.'); ?></small>
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
		<h4>Cari yang kamu butuhkan</h4>
		<form class="form-control" action="" method="post">
			<input type="search" class="form-group" value="" placeholder="Misal: Ergobaby carrier">
			<button type="submit" class="btn-hoopla">Cari!</button>
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
