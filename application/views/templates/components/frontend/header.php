<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php 
    if($title == 'Trivia Post - Toys Rent'){
?>
<meta property="og:url"                content="<?php echo base_url(uri_string());?>" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?php echo $gettrivia->titleTRIVIA;?>" />
<meta property="og:description"        content="<?php echo word_limiter($gettrivia->descriptionTRIVIA,8);?>" />
<meta property="og:image"              content="<?php echo base_url().$this->data['asfront'];?>img/logo-web.png" />
<?php } ?>
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
            <li><a href="<?php echo base_url();?>" class=""><i class="fa fa-home"></i></a></li>
            <li><a href="<?php echo base_url();?>about" class="">Tentang Hoopla</a></li>
            <li><a href="<?php echo base_url();?>why" class="">Kenapa Hoopla</a></li>
            <li class="has-children">
                <a href="<?php echo base_url();?>product" class="">Produk</a>
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
                    <li><a href="<?php echo base_url();?>terms" class="">Cara Pemesanan</a></li>
                    <li class="has-children">
                        <a href="<?php echo base_url();?>sale" class="">For Sale</a>
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
                            <li><a href="<?php echo base_url();?>form" class="">Titip Sewa</a></li>
                            <li class="has-children">
                                <a href="<?php echo base_url();?>trivia" class="">Trivia</a>
                                <ul class="children">
                                    <?php
                                    $category_trivia_active = selectall_category_trivia_active();
                                    if(!empty($category_trivia_active)){
                                        foreach ($category_trivia_active as $key => $trivia) {
                                    ?>
                                    <li><a href="#"><?php echo $trivia->namaCATTRIVIA;?></a></li>
                                    <?php } ?>
                                    <?php } ?>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url();?>contact" class="">Hubungi Kami</a></li>
                        </nav>
                    </header>
