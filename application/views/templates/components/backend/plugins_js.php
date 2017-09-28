<script src="<?php echo base_url().$this->data['asback'];?>js/common.min.js"></script>
<script src="<?php echo base_url().$this->data['asback'];?>js/uikit_custom.min.js"></script>
<script src="<?php echo base_url().$this->data['asback'];?>js/altair_admin_common.min.js"></script>

<?php 
$datatables = '
    <script src="'.base_url().$this->data['asbackbower'].'datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="'.base_url().$this->data['asback'].'js/custom/datatables/datatables.uikit.min.js"></script>
    <script src="'.base_url().$this->data['asback'].'js/pages/plugins_datatables.min.js"></script>
';
$forms_advanced='<script src="'.base_url().$this->data['asbackbower'].'ion.rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="'.base_url().$this->data['asback'].'js/pages/forms_advanced.min.js"></script>';
?>

<?php
if($plugins == 'plugins_datatables'){
?>
        
<?php echo $datatables;?>
<!--  preloaders functions -->
<script src="<?php echo base_url().$this->data['asback'];?>js/pages/components_preloaders.min.js"></script>

<?php echo $forms_advanced;?>
<!-- inputmask-->
<script src="<?php echo base_url().$this->data['asbackbower'];?>jquery.inputmask/dist/jquery.inputmask.bundle.js"></script>
<?php
}elseif($plugins == ''){
?>

<?php                   
}
?>
<script>
    $(function() {
        if(isHighDensity) {
            // enable hires images
            altair_helpers.retina_images();
        }
        if(Modernizr.touch) {
            // fastClick (touch devices)
            FastClick.attach(document.body);
        }
    });
        $window.load(function() {
        // ie fixes
            altair_helpers.ie_fix();
    });
</script>