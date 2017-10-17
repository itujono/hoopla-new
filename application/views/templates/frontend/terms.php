<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php 
$datarow = selectall_terms_only_one();
$title1 = $datarow->title1TERMS;
$desc1 = $datarow->desc1TERMS;
$title2 = $datarow->title2TERMS;
$desc2 = $datarow->desc2TERMS;
$title3 = $datarow->title3TERMS;
$desc3 = $datarow->desc3TERMS;
$title4 = $datarow->title4TERMS;
$desc4 = $datarow->desc4TERMS;

$harga1 = $datarow->harga1TERMS;
$harga2 = $datarow->harga2TERMS;
$harga3 = $datarow->harga3TERMS;

$place1 = $datarow->place1TERMS;
$place2 = $datarow->place2TERMS;
$place3 = $datarow->place3TERMS;

$datarows = selectall_terms_caratitip_only_one();

$title = $datarows->titleTERMSTITIP;
$text = $datarows->textTERMSTITIP;
$cara = $datarows->caraTERMSTITIP;
$syarat = $datarows->syaratTERMSTITIP;
?>
<main>
    <section id="pemesanan">
        <h3 class="heading">Mau pesan sekarang? Cool!</h3>
        <p class="par-heading">
            Pesan barang di Hoopla melalui 4 langkah mudah: <br> <span class="colorh4">Order by WA/LINE/SMS</span> > <span class="colorh4">Mengisi (Link) Form Penyewaan</span> > <span class="colorh4">Bayar</span> > <span class="colorh4">Mainan Diantar</span>
        </p>

        <div class="order-steps">
            <div class="wow bounceInUp">
                <span><img src="<?php echo base_url().$this->data['asfront'];?>img/icon-modal-01.png" alt="Tata cara"></span>
                <h4><?php echo $title1; ?></h4>
                <p><?php echo $desc1; ?></p>
            </div>
            <div class="wow bounceInUp">
                <span><img src="<?php echo base_url().$this->data['asfront'];?>img/icon-modal-02.png" alt=""></span>
                <h4><?php echo $title2; ?></h4>
                <p><?php echo $desc2; ?></p>
            </div>
            <div class="wow bounceInUp">
                <span><img src="<?php echo base_url().$this->data['asfront'];?>img/icon-modal-03.png" alt=""></span>
                <h4><?php echo $title3; ?></h4>
                <p><?php echo $desc3; ?></p>
            </div>
            <div class="wow bounceInUp">
                <span><img src="<?php echo base_url().$this->data['asfront'];?>img/icon-modal-04.png" alt=""></span>
                <h4><?php echo $title4; ?></h4>
                <p><?php echo $desc4; ?></p>
            </div>
        </div>
        <div class="delivery-charge">
            <h4>Berapa biaya pengantarannya?</h4>
            <dl>
                <dt><?php echo $harga1; ?></dt>
                <dd><?php echo $place1; ?></dd>
                <dt><?php echo $harga2; ?></dt>
                <dd><?php echo $place2; ?></dd>
                <dt><?php echo $title3; ?></dt>
                <dd><?php echo $place3; ?></dd>
            </dl>
        </div>
    </section>
    <section id="titip">
        <h3 class="heading"><?php echo $title; ?></h3>
        <p class="par-heading">
           <?php echo $text; ?>
        </p>
        <div class="image">
            <img src="<?php echo base_url().$this->data['asfront'];?>img/titip-sewa.png" width="140" alt="Titip Sewa">
        </div>
        <div class="terms">
            <h4>Apa saja syaratnya?</h4>
            <?php echo $syarat; ?>
        </div>
        <div class="how-to">
            <h4>Bagaimana caranya?</h4>
            <?php echo $cara; ?>
        </div>
    </section>
</main>

<aside class="">
    <div class="links">
        <ul>
            <h3>Go to:</h3>
            <li><a href="#pemesanan">Cara Pemesanan</a></li>
            <li><a href="#titip">Titip Sewa</a></li>
        </ul>
    </div>
</aside>