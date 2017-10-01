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
<div class="tingle-content-wrapper">
    <div id="form-order">
        <form class="form-control" action="" method="post" id="form-pemesanan">
            <div class="title">
                <h4>Formulir Titip Sewa</h4>
                Harap diisi dan dibaca kembali dengan seksama setiap info yang diinput.
            </div>
            <div class="form-group">
                <label for="name">Nama kamu</label>
                <input type="text" name="" value="" placeholder="Nama lengkap kamu">
            </div>
            <div class="form-group">
                <label for="email">Alamat lengkap kamu</label>
                <input type="text" name="" value="" placeholder="Jalan Indah Sari Blok A no. 12">
            </div>
            <div class="form-group">
                <label for="brand">Biaya antar jemput</label>
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
                <label for="phone">Nomor handphone</label>
                <input type="text" name="" value="" placeholder="08123456789">
            </div>
            <div class="form-group">
                <label for="brand">Instagram</label>
                <input type="text" name="" value="" placeholder="hooplarentalmainan">
            </div>
            <div class="form-group mb30">
                <label for="brand">Barang yang disewa</label>
                <p>Ergobaby Baby Carrier V2</p>
            </div>
            <div class="form-group">
                <label for="brand">Periode sewa</label>
                <select class="mt10">
                    <option value="2 minggu">2 minggu</option>
                    <option value="4 minggu">4 minggu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="brand">Tanggal pengiriman</label>
                <input type="text" name="" value="" placeholder="30/09/2017">
            </div>
            <div class="form-group">
                <label for="brand">Kamu telah direkomendasikan oleh</label>
                <input type="text" name="" value="" placeholder="Teman saya: Firza Tiara">
            </div>
            <div class="form-group">
                <label for="brand">Darimana kamu mengetahui Hoopla?</label>
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
