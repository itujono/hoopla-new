<footer>
    <div class="main-footer">
        <img src="<?php echo base_url().$this->data['asfront'];?>img/logo-web.png" alt="Logo Footer"width="200">
        <h4>We bring <span class="coolgreen">happiness</span> to your home</h4>
        <ul class="social">
            <li class="wow bounceInUp"><a href="#" title="Twitter kami"><i class="fa fa-twitter"></i></a></li>
            <li class="wow bounceInUp" data-wow-delay=".2s"><a href="#" title="Facebook kami"><i class="fa fa-facebook"></i></a></li>
            <li class="wow bounceInUp" data-wow-delay=".3s"><a href="#" title="Instagram kami"><i class="fa fa-instagram"></i></a></li>
            <li class="wow bounceInUp" data-wow-delay=".6s"><a href="#" title="Pinterest kami"><i class="fa fa-pinterest"></i></a></li>
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

<?php 
if($addONS == 'home' OR $addONS == 'product'){
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
<?php } ?>

<?php echo $plugins; ?>
</body>
</html>