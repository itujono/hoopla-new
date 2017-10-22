<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main>
    <div class="wrapper">
        <?php
            if(!empty($listtrivia)){
                foreach ($listtrivia as $key => $triv) {
        ?>
        <div class="card">
            <div class="card-content">
                <img src="<?php echo $triv->imageTRIVIA;?>" alt="<?php echo $triv->titleTRIVIA;?>">
            </div>
            <div class="card-bottom">
                <a href="<?php echo base_url();?>trivia/detail/<?php echo base64_encode($triv->idTRIVIA).'-'.seo_url($triv->titleTRIVIA);?>"><h4><?php echo $triv->titleTRIVIA;?></h4></a>
                <span><?php echo date('d F Y', strtotime($triv->createdateTRIVIA));?></span>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php } else { ?>
    <div class="wrapper">
        <div class="no-content">
            <h2>Belum ada post</h2>
            <p>Well, untuk sekarang belum ada post di page Trivia. Tapi, tenang, sebentar lagi akan banyak postingan-postingan bermanfaat tentang dunia si kecil.</p>
            <a href="index.html" class="btn-hoopla">Kembali ke Home</a>
        </div>
    </div>
    <?php } ?>
</main>

<aside class="sidebar">
    <section class="recent-post">
        <h4>Postingan <span class="coolgreen">Terbaru</span></h4>
        <?php
            if(!empty($listtriviaterbaru)){
                foreach ($listtriviaterbaru as $key => $terbaru) {
        ?>
        <div>
            <a href="<?php echo base_url();?>trivia/detail/<?php echo base64_encode($terbaru->idTRIVIA).'-'.seo_url($terbaru->titleTRIVIA);?>" class="cat"><?php echo $terbaru->namaCATTRIVIA;?></a>
            <div class="info">
                <a href="<?php echo base_url();?>trivia/detail/<?php echo base64_encode($terbaru->idTRIVIA).'-'.seo_url($terbaru->titleTRIVIA);?>">
                    <h5><?php echo $terbaru->titleTRIVIA;?></h5>
                </a>
                <span class="date"><i class="fa fa-clock-o"></i> <?php echo date('d F Y', strtotime($terbaru->createdateTRIVIA));?></span>
            </div>
        </div>
        <?php } ?>
        <?php } ?>
    </section>
    <section class="popular-post">
        <h4>Postingan <span class="coolgreen">Terpopuler</span></h4>
        <?php
            if(!empty($listtriviaterpopuler)){
                foreach ($listtriviaterpopuler as $key => $terpopuler) {
        ?>
        <div>
            <a href="<?php echo base_url();?>trivia/detail/<?php echo base64_encode($terpopuler->idTRIVIA).'-'.seo_url($terpopuler->titleTRIVIA);?>" class="cat">Parenting</a>
            <div class="info">
                <a href="<?php echo base_url();?>trivia/detail/<?php echo base64_encode($terpopuler->idTRIVIA).'-'.seo_url($terpopuler->titleTRIVIA);?>">
                    <h5><?php echo $terpopuler->titleTRIVIA;?></h5>
                </a>
                <span class="date"><i class="fa fa-clock-o"></i> <?php echo date('d F Y', strtotime($terpopuler->createdateTRIVIA));?></span>
            </div>
        </div>
        <?php } ?>
        <?php } ?>
    </section>
</aside>
