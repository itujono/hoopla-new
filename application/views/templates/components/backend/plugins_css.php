<?php
if($plugins == 'plugins_order'){
?>
<!-- metrics graphics (charts) -->
<link rel="stylesheet" href="<?php echo base_url().$this->data['asbackbower'];?>metrics-graphics/dist/metricsgraphics.css">
<!-- chartist -->
<link rel="stylesheet" href="<?php echo base_url().$this->data['asbackbower'];?>chartist/dist/chartist.min.css">

<?php } elseif ($plugins == 'plugins_editorder') { ?>
<!-- additional styles for plugins -->

<?php } ?>
<link rel="stylesheet" href="<?php echo base_url().$this->data['asbackbower'];?>uikit/css/uikit.almost-flat.min.css" media="all">
<link rel="stylesheet" href="<?php echo base_url().$this->data['asback'];?>css/main.min.css" media="all">
<link rel="stylesheet" href="<?php echo base_url().$this->data['asback'];?>css/themes/themes_combined.min.css" media="all">