<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <?php echo $addons; ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container" id="<?php echo $idbody;?>">
        <header>
            <div class="top-panel">
                <div>
                    Contact kami di <span class="coolgreen">+62 856 6765 1688</span> atau <a href="mailto:info@hooplatoys.com?subject=feedback" class="coolgreen">info@hooplatoys.com</a></a>
                </div>
            </div>
            <div class="main-logo">
                <img src="<?php echo base_url().$this->data['asfront'];?>img/logo-web.png" alt="Logo utama">
            </div>
            <nav>
                <li><a href="<?php echo base_url();?>" class="active"><i class="fa fa-home"></i></a></li>
                <li><a href="<?php echo base_url();?>about" class="active">Tentang Hoopla</a></li>
                <li><a href="<?php echo base_url();?>why">Kenapa Hoopla</a></li>
                <li class="has-children">
                    <a href="<?php echo base_url();?>product">Produk</a>
                    <ul class="children">
                        <?php
                        $category_active = selectall_category_active();
                        if(!empty($category_active)){
                        foreach ($category_active as $key => $cat) {
                        ?>
                        <li><a href="#"><?php echo $cat->namaCATEGORY;?></a></li>
                        <?php } ?>
                        <?php } ?>
                    </ul>
                </li>
                <li><a href="<?php echo base_url();?>terms">Cara Pemesanan</a></li>
                <li class="has-children">
                    <a href="<?php echo base_url();?>sale">For Sale</a>
                    <ul class="children">
                        <?php
                        $category_sale_active = selectall_category_sale_active();
                        if(!empty($category_sale_active)){
                        foreach ($category_sale_active as $key => $catsale) {
                        ?>
                        <li><a href="#"><?php echo $catsale->namaCATSALE;?></a></li>
                        <?php } ?>
                        <?php } ?>
                    </ul>
                </li>
                <li><a href="<?php echo base_url();?>form">Titip Sewa</a></li>
                <li class="has-children">
                    <a href="<?php echo base_url();?>trivia">Trivia</a>
                    <ul class="children">
                        <li><a href="#">Tips Tricks</a></li>
                        <li><a href="#">Parenting</a></li>
                        <li><a href="#">Toys</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url();?>contact">Hubungi Kami</a></li>
            </nav>
        </header>
