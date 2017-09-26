<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hoopla - Toys Rent</title>
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
                <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a></li>
                <li><a href="<?php echo base_url();?>about">Tentang Hoopla</a></li>
                <li><a href="<?php echo base_url();?>why">Kenapa Hoopla</a></li>
                <li class="has-children">
                    <a href="<?php echo base_url();?>product">Produk</a>
                    <ul class="children">
                        <li><a href="#">Brands</a></li>
                        <li><a href="#">Kategori</a></li>
                        <li><a href="#">Umur</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url();?>terms">Cara Pemesanan</a></li>
                <li class="has-children">
                    <a href="<?php echo base_url();?>sale">For Sale</a>
                    <ul class="children">
                        <li><a href="#">For mom</a></li>
                        <li><a href="#">For baby</a></li>
                        <li><a href="#">Toys</a></li>
                        <li><a href="#">Snacks &amp; foods</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url();?>entrust">Titip Sewa</a></li>
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