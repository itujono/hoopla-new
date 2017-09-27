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
<link rel="stylesheet" href="https://npmcdn.com/flickity@2/dist/flickity.css">
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
} elseif ($plugins == 'contact') {
?>
<link rel="stylesheet" href="https://npmcdn.com/flickity@2/dist/flickity.css">
<?php } ?>