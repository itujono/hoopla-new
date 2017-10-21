<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/main.css">
<link rel="stylesheet" href="https://unpkg.com/tippy.js@1.2.0/dist/tippy.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">


<?php
if ($plugins == 'home') {
?>
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/tingle.min.css">
<?php
} elseif ($plugins == 'about') {
?>
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/responsive.css">
<?php
} elseif ($plugins == 'product') {
?>
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/tingle.min.css">
<?php
} elseif ($plugins == 'sale') {
?>
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/tingle.min.css">
<?php
} elseif ($plugins == 'form') {
?>
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/tingle.min.css">
<?php
} elseif ($plugins == 'product-detail') {
?>
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/tingle.min.css">
<link rel="stylesheet" href="http://sachinchoolur.github.io/lightslider/dist/css/lightslider.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.3/css/lightgallery.min.css">
<?php
} elseif ($plugins == 'discount') {
?>
<link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/tingle.min.css">
<?php } ?>
