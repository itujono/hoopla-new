<?php
$social = selectall_social();
$wa = $social->waSOCIAL;
$line = $social->lineSOCIAL;
$ig = $social->igSOCIAL;
$emaail1 = $social->email1SOCIAL;
$emaail2 = $social->email2SOCIAL;
$telp= $social->telpSOCIAL;
?>
<footer>
    <div class="main-footer">
        <img src="<?php echo base_url().$this->data['asfront'];?>img/logo-web.png" alt="Logo Footer"width="200">
        <h4>We bring <span class="coolgreen">happiness</span> to your home</h4>
        <ul class="social">
            <li class="wow bounceInLeft"><a href="#" title="<?php echo $wa;?>">WA</a></li>
            <li class="wow bounceInDown" data-wow-delay=".2s">
                <a href="#" title="<?php echo $line;?>">LINE</a>
            </li>
            <li class="wow bounceInRight" data-wow-delay=".3s">
                <a href="http://instagram.com/<?php echo $ig;?>/" title="<?php echo $wa;?>">IG</a>
            </li>
        </ul>
    </div>
    <div class="copyright">
        <div>
            Copyright &copy; 2017 <a href="http://www.codewell.id/">Codewell Indonesia</a>
        </div>
        <div>
            <i class="fa fa-phone"></i> <?php echo $telp;?>
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
            <a href="<?php echo base_url();?>form" class="btn-hoopla">Baca selengkapnya</a>
        </div>
    </div>
    <?php } elseif ($addONS == 'discount') { ?>
    <div class="tingle-content-wrapper">
        <div class="modaler" id="first">
            <div class="image">
                <img src="http://unsplash.it/500x500" alt="Modal image">
            </div>
            <div class="modal-content">
                <h2 class="modal-title">Diskon 40% Semua Produk Nuna!</h2>
                <div class="modal-description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="valid">
                        <p>Valid hingga</p> 20 Oktober 2019
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tingle-content-wrapper">
        <div class="modaler" id="second">
            <div class="image">
                <img src="http://unsplash.it/500x500" alt="Modal image">
            </div>
            <div class="modal-content">
                <h2 class="modal-title">Diskon 100% Semua Produk Nano Nano!</h2>
                <div class="modal-description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="valid">
                        <p>Valid hingga</p> 17 Oktober 2020
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php echo $plugins; ?>
</body>
</html>
