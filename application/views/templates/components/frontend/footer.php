<footer>
    <div class="main-footer">
        <img src="<?php echo base_url().$this->data['asfront'];?>img/logo-web.png" alt="Logo Footer"width="200">
        <h4>We bring <span class="coolgreen">happiness</span> to your home</h4>
        <ul class="social">
            <li class="wow bounceInUp"><a href="#" title="085667651688">WA</a></li>
            <li class="wow bounceInUp" data-wow-delay=".2s">
                <a href="#" title="hoopla_rentalmainan">LINE</a>
            </li>
            <li class="wow bounceInUp" data-wow-delay=".3s">
                <a href="http://instagram.com/hoopla_rentalmainan/" title="hoopla_rentalmainan">IG</a>
            </li>
        </ul>
    </div>
    <div class="copyright">
        <div>
            Copyright &copy; Sempardak 2017
        </div>
        <div>
            <i class="fa fa-phone"></i> 0778 325 253
        </div>
    </div>
</footer>
</div>
<?php
if($addONS == 'home' OR $addONS == 'product' OR $addONS == 'sale' OR $addONS == 'form'){
?>
<div class="tingle-content-wrapper">
    <div class="ordering" id="ordering">
        <h3>Gimana cara order di Hoopla?</h3>
        <p class="order-steps">Well, it's quite simple, actually. Cuma butuh 4 proses yang, seperti kami katakan, simpel.</p>
        <ul class="steps">
            <li>
                <div>
                    <img src="<?php echo base_url().$this->data['asfront'];?>img/icon-modal-01.png" alt="Tata cara">
                </div>
                <h3>Whatsapp/Line/SMS kami</h3>
                Pemesanan dan pengecekan ketersediaan barang dilakukan dengan mengirimkan chat ke admin Hoopla melalui <a href="contact.html">Whatsapp, LINE atau SMS.</a>
            </li>
            <li>
                <div class="softpurple">
                    <img src="<?php echo base_url().$this->data['asfront'];?>img/icon-modal-02.png" alt="Tata cara">
                </div>
                <h3>Isi <a href="#">form pemesanan</a> nya</h3>
                Penyewa akan diminta untuk mengisi Form Penyewaan melalui link yang dikirimkan oleh Hoopla melalui WA, LINE atau SMS. Isi data diri dan tipe mainan yang ingin disewa. Tenang, cuma butuh 1 (satu) menit kok buat mengisi form penyewaan Hoopla :)
            </li>
            <li>
                <div class="softblue">
                    <img src="<?php echo base_url().$this->data['asfront'];?>img/icon-modal-03.png" alt="Tata cara">
                </div>
                <h3>Lakukan pembayaran</h3>
                Setelah Form Penyewaan di submit, Penyewa akan diberi tenggat waktu untuk membayar mainan yang akan disewa.
            </li>
            <li>
                <div class="softpink">
                    <img src="<?php echo base_url().$this->data['asfront'];?>img/icon-modal-04.png" alt="Tata cara">
                </div>
                <h3>Voila! Kami antar barangnya!</h3>
                Hoopla akan memberikan jadwal pengantaran dan mainan siap diantar!
            </li>
        </ul>
    </div>
</div>
<div class="tingle-content-wrapper">
    <div class="titip" id="titip">
        <h3>Mau titip barang kamu di Hoopla?</h3>
        <p class="order-steps">Well, it's quite simple, actually. Cuma butuh 4 proses yang, seperti kami katakan, simpel.</p>
        <ul class="steps">
            <li>
                <div class="softpurple">
                    <img src="<?php echo base_url().$this->data['asfront'];?>img/icon-modal-02.png" alt="Tata cara">
                </div>
                <h3>Isi <a href="#">form pemesanan</a> nya</h3>
                Isi dulu data diri kamu sebagai pembeli. This is the most important part.
            </li>
            <li>
                <div>
                    <img src="<?php echo base_url().$this->data['asfront'];?>img/icon-modal-01.png" alt="Tata cara">
                </div>
                <h3>Hubungi kami</h3>
                <ul>
                    <li>Whatsapp 082113111699</li>
                    <li>Line 082113111670</li>
                    <li>SMS 082113111633</li>
                </ul>
            </li>
            <li>
                <div class="softblue">
                    <img src="<?php echo base_url().$this->data['asfront'];?>img/icon-modal-03.png" alt="Tata cara">
                </div>
                <h3>Lakukan pembayaran</h3>
                Detail info rekening akan kami beritahu via email begitu kamu berhasil melakukan order
            </li>
            <li>
                <div class="softpink">
                    <img src="<?php echo base_url().$this->data['asfront'];?>img/icon-modal-04.png" alt="Tata cara">
                </div>
                <h3>Voila! Kami jemput barangnya!</h3>
                Yup, benar! Sesimpel itu. Nggak ada yang lain.
            </li>
        </ul>
        <a href="form-titip.html" class="btn-hoopla">Baca selengkapnya</a>
    </div>
</div>
<?php 
} else if($addONS == 'product-detail') { 
?>
<div class="tingle-content-wrapper">
    <div id="form-order">
        <form class="form-control" action="" method="post" id="form-pemesanan">
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
                <input type="text" name="" value="" placeholder="Nama lengkap kamu">
            </div>
            <div class="form-group">
                <label for="email">Alamat lengkap kamu <sup>*</sup></label>
                <input type="text" name="" value="" placeholder="Jalan Indah Sari Blok A no. 12">
            </div>
            <div class="form-group">
                <label for="brand">Biaya antar jemput <sup>*</sup></label>
                <select class="mt10">
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
                <input type="text" name="" value="" placeholder="08123456789">
            </div>
            <div class="form-group">
                <label for="brand">Instagram</label>
                <input type="text" name="" value="" placeholder="hooplarentalmainan">
            </div>
            <div class="form-group mb30">
                <label for="brand">Barang yang disewa <sup>*</sup></label>
                <p>Ergobaby Baby Carrier V2</p>
            </div>
            <div class="form-group">
                <label for="brand">Periode sewa <sup>*</sup></label>
                <select class="mt10">
                    <option value="2 minggu">2 minggu</option>
                    <option value="4 minggu">4 minggu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="brand">Tanggal pengiriman <sup>*</sup></label>
                <input type="text" name="" value="" placeholder="30/09/2017">
            </div>
            <div class="form-group">
                <label for="brand">Kamu telah direkomendasikan oleh</label>
                <input type="text" name="" value="" placeholder="Teman saya: Firza Tiara">
            </div>
            <div class="form-group">
                <label for="brand">Darimana kamu mengetahui Hoopla? <sup>*</sup></label>
                <select class="mt10">
                    <option value="Instagram">Instagram</option>
                    <option value="Website">Website</option>
                    <option value="Facebook">Facebook</option>
                    <option value="Teman">Teman</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
            <div class="form-group">
                <label for="brand">Permintaan khusus</label>
                <textarea rows="8" cols="80" placeholder="Saya ingin dibungkus serapi mungkin"></textarea>
            </div>
            <div class="disclaimer">
                <input type="checkbox" value="agree" id="tc-check">
                <p id="tc-read">Saya sudah membaca <a href="tc.html" class="coolgreen">Syarat &amp; Ketentuan</a> yang telah dibuat oleh pihak Hoopla Rental Mainan, dan saya memahami sekaligus menyetujui keseluruhan isinya.</p>
            </div>
            <button type="submit" name="button" class="btn-hoopla" id="proceed">Pesan sekarang</button>
        </form>
    </div>
</div>
<?php } ?>

<?php echo $plugins; ?>
</body>
</html>
