<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php 
$datarow = selectall_about_only_one();
$title1 = $datarow->title1ABOUT;
$desc1 = $datarow->desc1ABOUT;
$title2 = $datarow->title2ABOUT;
$desc2 = $datarow->desc2ABOUT;
$link2 = $datarow->link2ABOUT;
$title3 = $datarow->title3ABOUT;
$desc3 = $datarow->desc3ABOUT;
$link3 = $datarow->link3ABOUT;
$title4 = $datarow->title4ABOUT;
$desc4 = $datarow->desc4ABOUT;
$link4 = $datarow->link4ABOUT;
?>
<main>
    <section class="first">
        <div>
            <h2><?php echo $title1;?></h2>
            <p><?php echo $desc1;?></p>
        </div>
        <div class="figure">
            <img src="<?php echo base_url().$this->data['asfront'];?>img/toy-store.png" alt="Toys Store">
        </div>
    </section>
    <section class="second">
        <div class="image">
            <img src="<?php echo base_url().$this->data['asfront'];?>img/rocket-toy.png" alt="Rocket">
        </div>
        <div>
            <h3><?php echo $title2;?></h3>
            <p><?php echo $desc2;?></p>
            <a href="<?php echo $link2;?>" class="btn-hoopla">Lihat alasannya</a>
        </div>
    </section>

    <section class="third">
        <div>
            <h3><?php echo $title3;?></h3>
            <p><?php echo $desc3;?></p>
            <a href="<?php echo $link3;?>" class="btn-hoopla">Cari tau</a>
        </div>
    </section>
    <section class="fourth">
        <div class="satelite"></div>
        <div class="satelite two"></div>
        <div class="spaceman"></div>
        <div class="captioner">
            <h3><?php echo $title4;?></h3>
            <p><?php echo $desc4;?>?</p>
            <a href="<?php echo $link4;?>" class="btn-hoopla">Coba lihat</a>
        </div>
    </section>
</main>