<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main>
    <div class="demooo">
        <ul id="product-slider" class="owl-carousel owl-theme">
            <?php if(!empty($getrental->map)){
                foreach ($getrental->map as $key => $val_img) {
            ?>
            <!-- <li data-thumb="<?php //echo $val_img; ?>"
                data-src="<?php //echo $val_img; ?>">
                <img src="<?php //echo $val_img; ?>" alt="<?php //echo $getrental->namaRENTAL;?>"/>
            </li> -->
            <li class="item">
                <a href="<?php echo base_url().$this->data['asfront'];?>img/toys1.png" data-fancybox="group" data-caption="Super caption gitu deh">
                    <!-- <div class="caption">
                        <h4>Mainan Minion</h4>
                    </div> -->
                    <img src="<?php echo base_url().$this->data['asfront'];?>img/toys1.png" alt="Toy Minion">
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
        <!-- <a href="#" class="btn-hoopla" id="rent-now"><i class="fa fa-shopping-cart"></i> &nbsp; Saya mau rental ini</a> -->
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

<div class="tingle-content-wrapper">
    <div id="form-order">
        <form class="form-control" action="<?php echo base_url();?>product/submit_sewabarang" method="post" id="form-pemesanan">
            <div class="title">
                <h4>Jadi kamu mau sewa barang ini?</h4>
                Alright, then. Silakan isi form pemesanan di bawah ini, dan baca kembali dengan seksama setiap info yang diinput.
            </div>
            <div class="show-tc">
                <a href="#terms-conditions" class="btn-hoopla" id="show-tc">Lihat S &amp; K</a>
            </div>
            <article id="terms-conditions">
                <h3>Syarat dan Ketentuan Penyewaan</h3>
                <ul>
                    <li>Pemesanan dilakukan melalui WA/Line Hoopla dengan mengirimkan foto KTP asli via WA/Line Hoopla dan mengisi Form Penyewaan yang telah disediakan. Kerahasiaan data Pemesan akan dijaga oleh Hoopla.</li>
                    <li>Setelah mengisi Form Penyewaan, Penyewa dapat melakukan pembayaran sesuai dengan harga barang yang disewa dengan transfer ke rekening Mandiri 109-00-1626368-3 atas nama Fitriannisa.</li>
                    <li>Untuk menghindari waiting list, Penyewa dapat melakukan booking/blocking tanggal dengan melakukan DP sebesar 50% atau full payment maksimal 3 hari setelah pemesanan dan pengisian Form Penyewaan.  Dikarenakan tingginya permintaan sewa, jika dalam waktu 3 hari penyewa belum melakukan pembayaran, mohon konfirmasi kembali melalui wa/line terkait ketersediaan barang. Pelunasan dilakukan maksimal H-1 pengiriman. </li>
                    <li>Barang akan diantar setelah Penyewa melakukan pelunasan.</li>
                    <li>Keterlambatan pelunasan (termasuk pelunasan ketika hari H) dapat mengakibatkan keterlambatan pengantaran barang (re-schedule hari berikutnya jika jadwal antar jemput hari tersebut sedang padat). Keterlambatan pengantaran barang yang disebabkan oleh keterlambatan pelunasan tidak akan menambah masa sewa barang.</li>
                    <li>Jika Penyewa melakukan pembatalan (cancellation), maka DP yang telah dibayarkan akan hangus dan tidak dapat dikembalikan.</li>
                    <li>Penyewa tidak diperkenankan menukar barang yang disewa dan tidak berhak meminta pengembalian dana bila barang dikembalikan sebelum periode sewa berakhir</li>
                    <li>Hoopla akan mengantar dan menjemput barang sesuai dengan tanggal dan jam yang telah ditentukan. Biaya antar jemput (mulai dari Rp. 10,000 hingga Rp. 20,000) dapat dilihat di bawah sesuai dengan lokasi antar jemput.</li>
                    <li>Antar jemput akan dilakukan antara jam 14.00 hingga jam 22.00 (disesuaikan dengan jalur antar-jemput barang pada hari tersebut). Konfirmasi detail jam antar jemput barang akan diberitahukan pada hari H antar jemput barang.</li>
                    <li>Pengantaran Hoopla berlaku untuk satu kali pengantaran dan penjemputan barang. Jika tidak ada orang di kediaman Penyewa saat pengantaran dan penjemputan, maka pengantaran dan penjemputan akan dilakukan di hari yang lain, dengan dikenakan biaya tambahan antar jemput barang sebesar Rp. 10,000, dan tidak menambah masa sewa barang.</li>
                    <li>Dikarenakan jadwal penyewaan padat, Penyewa dapat memperpanjang masa sewa dengan cara menghubungi WA/Line Hoopla sesegera mungkin selama periode berikutnya barang tersebut belum ada yang akan menyewa.</li>
                    <li>Ketika barang diterima Penyewa, Hoopla akan menjelaskan cara pemakaian kepada Penyewa dan secara bersama-sama akan mengecek kondisi barang. Apabila terdapat kerusakan ketika barang dikembalikan, maka Hoopla berhak mengenakan denda sesuai tingkat kerusakan barang tersebut.</li>
                    <li>Penyewa wajib menjaga kebersihan dan keutuhan barang yang disewa.</li>
                </ul>
            </article>
            <div class="form-group">
                <label for="name">Nama kamu <sup>*</sup></label>
                <input type="text" name="namaSEWA" placeholder="Nama lengkap kamu" required="required">
            </div>
            <div class="form-group">
                <label for="email">Alamat lengkap kamu <sup>*</sup></label>
                <input type="text" name="alamatSEWA" placeholder="Jalan Indah Melaka Blok A no. 12" required="required">
            </div>
            <div class="form-group">
                <label for="brand">Biaya antar jemput <sup>*</sup></label>
                <select class="mt10" name="antarjemputSEWA" required="required">
                    <option value="Batam Kota">Kecamatan Batam Kota <strong>Rp 10.000,00</strong></option>
                    <option value="Batu Aji">Kecamatan Batu Aji <strong>Rp 20.000,00</strong></option>
                    <option value="Batu Ampar">Kecamatan Batu Ampar <strong>Rp 20.000,00</strong></option>
                    <option value="Bengkong">Kecamatan Bengkong <strong>Rp 20.000,00</strong></option>
                    <option value="Lubuk Baja">Kecamatan Lubuk Baja <strong>Rp 15.000,00</strong></option>
                    <option value="Nongsa">Kecamatan Nongsa <strong>Rp 25.000,00</strong></option>
                    <option value="Sagulung">Kecamatan Sagulung <strong>Rp 20.000,00</strong></option>
                    <option value="Sei Beduk">Kecamatan Sei Beduk <strong>Rp 20.000,00</strong></option>
                    <option value="Sekupang">Kecamatan Sekupang <strong>Rp 20.000,00</strong></option>
                </select>
            </div>
            <div class="form-group">
                <label for="phone">Nomor handphone <sup>*</sup></label>
                <input type="text" name="telpSEWA" placeholder="08123456789" required="required">
            </div>
            <div class="form-group">
                <label for="brand">Instagram</label>
                <input type="text" name="instagramSEWA" placeholder="hooplarentalmainan">
            </div>
            <div class="form-group mb30">
                <label for="brand">Barang yang disewa <sup>*</sup></label>
                <p><?php echo $getrental->namaRENTAL;?></p>
                <input type="hidden" name="barangSEWA" value="<?php echo $getrental->namaRENTAL;?>" required="required">
            </div>
            <div class="form-group">
                <label for="brand">Periode sewa <sup>*</sup></label>
                <select class="mt10" name="periodeSEWA" required="required">
                    <option value="2 minggu">2 minggu</option>
                    <option value="4 minggu">4 minggu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="brand">Tanggal pengiriman <sup>*</sup></label>
                <input type="text" name="pengirimanSEWA" placeholder="30/09/2017" required="required">
            </div>
            <div class="form-group">
                <label for="brand">Kamu telah direkomendasikan oleh</label>
                <input type="text" name="rekomenSEWA" placeholder="Teman saya: Firza Tiara">
            </div>
            <div class="form-group">
                <label for="brand">Darimana kamu mengetahui Hoopla? <sup>*</sup></label>
                <select class="mt10" name="ketahuiSEWA">
                    <option value="Instagram">Instagram</option>
                    <option value="Website">Website</option>
                    <option value="Facebook">Facebook</option>
                    <option value="Teman">Teman</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
            <div class="form-group">
                <label for="brand">Permintaan khusus</label>
                <textarea rows="8" cols="80" name="permintaanSEWA" placeholder="Saya ingin dibungkus serapi mungkin"></textarea>
            </div>
            <div class="disclaimer">
                <input type="checkbox" name="syaratSEWA" value="agree" id="tc-check">
                <p id="tc-read">Saya sudah membaca <a href="<?php echo base_url();?>terms" class="coolgreen">Syarat &amp; Ketentuan</a> yang telah dibuat oleh pihak Hoopla Rental Mainan, dan saya memahami sekaligus menyetujui keseluruhan isinya.</p>
            </div>
            <button type="submit" name="button" class="btn-hoopla">Pesan sekarang</button>
        </form>
    </div>
</div>
