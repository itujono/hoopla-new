<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<main>
    <section class="trivia-post">
        <div class="meta">
            <div class="image">
                <img src="<?php echo base_url().$this->data['asfront'];?>img/user.jpg" alt="Admin">
            </div>
            <p class="author">by <a href="#">Administrator</a></p>
        </div>
        <div class="post">
            <h2><?php echo $gettrivia->titleTRIVIA;?></h2>
            <span class="date">
                <i class="fa fa-clock-o"></i> <?php echo date('d F Y', strtotime($gettrivia->createdateTRIVIA));?>
            </span>/ &nbsp;
            <span class="cat">
                <i class="fa fa-file-text-o"></i> <?php echo $gettrivia->namaCATTRIVIA;?>
            </span>
            <p class="main-post"><?php echo $gettrivia->descriptionTRIVIA;?>
            </p>
            <div class="share-post">
                <h4>Suka artikel ini?</h4>
                <p>Bagikan ke teman-teman kamu.</p>
                <ul>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="similar-post">
            <h4>Postingan Sejenis</h4>
            <div class="wrapper">
            <?php
                if(!empty($similartrivia)){
                    foreach ($similartrivia as $key => $sim) {
            ?>
                <div class="card">
                    <h4><?php echo $sim->titleTRIVIA;?></h4>
                    <span><i class="fa fa-clock-o"></i> <?php echo date('d F Y', strtotime($sim->createdateTRIVIA));?></span>
                    <p><?php echo word_limiter($sim->descriptionTRIVIA, 14);?></p>
                    <a href="<?php echo base_url();?>trivia/detail/<?php echo base64_encode($sim->idTRIVIA).'-'.seo_url($sim->titleTRIVIA);?>" class="btn-hoopla">Baca sekarang</a>
                </div>
            <?php } ?>
            <?php } ?>
            </div>
        </div>
    </section>
</main>