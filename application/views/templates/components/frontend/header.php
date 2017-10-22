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
<?php
$social = selectall_social();
$email = $social->email2SOCIAL;
$telp= $social->telpSOCIAL;
?>
<div class="container" id="<?php echo $idbody;?>">
    <header>
        <div class="top-panel">
            <div>
                Contact kami di <span class="coolgreen"><?php echo $telp;?></span> atau <a href="mailto:<?php echo $email;?>?subject=feedback" class="coolgreen"><?php echo $email;?></a></a>
            </div>
        </div>
        <div class="main-logo">
            <a href="<?php echo base_url();?>home">
                <img src="<?php echo base_url().$this->data['asfront'];?>img/logo-web.png" alt="Logo utama">
            </a>
        </div>
        <nav>
            <?php
              $menus = array (array('','<i class="fa fa-home"></i>'), array('about','Tentang Hoopla'), array('why','Kenapa Hoopla'), array('product','Produk'), array('terms','Cara Pemesanan'), array('sale','For Sale'),array('trivia','Trivia'), array('contact','Hubungi Kami'));
              foreach ($menus as $values) {
                if(!empty($this->uri->segment(3))) {
                  $url = $this->uri->segment(2);
                } else {
                  $url = $this->uri->segment(1);
                }
                $class = '';
                if($url == $values[0])$class = 'active';
            ?>
            <li><a href="<?php echo base_url().$values[0];?>" class="<?php echo $class;?>"><?php echo $values[1];?></a></li>
            <?php } ?>
        </nav>
    </header>
