<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main>
	<section class="main-news">
		<div class="owl-carousel wow bounceInUp" data-wow-delay=".2s">
		<?php if(!empty($listslider)){
			foreach ($listslider as $key => $slider) {
			$array_button_name = array('Lihat','lihat lagi','Selanjutnya','Selengkapnya');
			$but_name = array_rand($array_button_name);
		?>
			<div class="carousel-cell">
				<img src="<?php echo $slider->imageSLIDER;?>" alt="<?php echo $slider->titleSLIDER;?>" />
				<div class="caption">
					<h3><?php echo $slider->titleSLIDER;?></h3>
					<p><?php echo $slider->descSLIDER;?></p>
					<a href="<?php echo $slider->linkSLIDER;?>" class="btn-hoopla"><?php echo $array_button_name[$but_name];?></a>
				</div>
			</div>
			<?php } ?>
		<?php } ?>
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
		<?php if(!empty($featuredtrivia)){ ?>
		<div style="background: url('<?php echo base_url().$this->data['asfront'];?>img/bg1.jpg')" class="wow bounceInUp" data-wow-delay="1s">
			<h3><?php echo $featuredtrivia->titleTRIVIA;?></h3>
			<a href="<?php echo base_url();?>trivia/detail/<?php echo base64_encode($featuredtrivia->idTRIVIA).'-'.seo_url($featuredtrivia->titleTRIVIA);?>" class="btn-hoopla">Lihat</a>
		</div>
		<?php } ?>
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
		<form class="form-control" action="<?php echo base_url();?>product/searching" method="GET">
			<input type="search" class="form-group" name="search" placeholder="Misal: Ergobaby carrier" required="required" min="3">
			<button type="submit" class="btn-hoopla">Cari!</button>
		</form>
	</div>
	<div class="sort">
		<h4>Sort by:</h4>
		<form method="GET" name="formsortbybrand" action="<?php echo base_url();?>product/sortby">
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
			<button type="submit" class="btn-hoopla">Okay, Sortir!</button>
		</form>
		<form method="GET" name="formsortbytype" action="<?php echo base_url();?>product/sortby">
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
			<button type="submit" class="btn-hoopla">Okay, Sortir!</button>
		</form>
		<form method="GET" name="formsortbyage" action="<?php echo base_url();?>product/sortby">
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
			<a href="<?php echo base_url();?>form" class="btn-hoopla" id="btn-titip">Klik di sini</a>
		</div>
	</div>
	<div class="cta-sidebar wow bounceInLeft" data-wow-delay="1.3s">
		<div>
			<h3><small class="coolgreen">Masih bingung?</small> Halo-in kami aja.</h3>
			<i class="fa fa-phone-square"></i> 0856 6765 1688
		</div>
	</div>
</aside>
