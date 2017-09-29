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
            <li><a href="<?php echo base_url();?>product" class="">Produk</a></li>
            <li><a href="<?php echo base_url();?>terms" class="">Cara Pemesanan</a></li>
            <li><a href="<?php echo base_url();?>sale" class="">For Sale</a></li>
            <li><a href="<?php echo base_url();?>contact" class="">Hubungi Kami</a></li>
        </nav>
    </header>
