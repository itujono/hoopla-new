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
$forms_validation='<script> altair_forms.parsley_validation_config();</script><script src="'.base_url().$this->data['asbackbower'].'parsleyjs/dist/parsley.min.js"></script>
    <script src="'.base_url().$this->data['asback'].'js/pages/forms_validation.min.js"></script>';
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
} elseif($plugins == 'plugins_dashboard') { 
?>

<script src="<?php echo base_url().$this->data['asbackbower']; ?>metrics-graphics/dist/metricsgraphics.min.js"></script>
<script src="<?php echo base_url().$this->data['asbackbower']; ?>chartist/dist/chartist.min.js"></script>
<script src="<?php echo base_url().$this->data['asbackbower']; ?>peity/jquery.peity.min.js"></script>
<script src="<?php echo base_url().$this->data['asbackbower']; ?>jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url().$this->data['asbackbower']; ?>countUp.js/dist/countUp.min.js"></script>
<!-- chartist -->
<script src="<?php echo base_url().$this->data['asbackbower']; ?>chartist/dist/chartist.min.js"></script>
<?php
    $charings = chart_visitor_labels();
    $replacechartlabels = str_replace(['{',':','}','date','""'], ['','','','',''], $charings);

    $charing = chart_visitor_series();
    $replacechartseries = str_replace(['{','"',':','}','jumlah'], ['','','','',''], $charing);
?>
<script type="text/javascript">
$(function() {
    // chartist
    altair_charts.chartist_charts();
});
altair_charts = {
        chartist_charts: function() {
        // line chart with area
        var ch_line_area = new Chartist.Line('#chartist_line_area', {
            labels: <?php echo $replacechartlabels;?>,
            series: [
               <?php echo $replacechartseries;?>
            ]
        }, {
            low: 0,
            showArea: true
        });
        $window.on('resize',function() {
            ch_line_area.update();
        });
    }
};
</script>
<script src="<?php echo base_url().$this->data['asback']; ?>js/pages/dashboard.min.js"></script>
<?php
} elseif($plugins == 'plugins_create_products_sale') { 
?>
<?php echo $datatables;?>
<!--  preloaders functions -->
<script src="<?php echo base_url().$this->data['asback'];?>js/pages/components_preloaders.min.js"></script>
<!-- tinymce -->
<script src="<?php echo base_url().$this->data['asbackbower']; ?>tinymce/tinymce.min.js"></script>
<script>
    $(function() {
    altair_wysiwyg._tinymce();
});

// wysiwyg editors
altair_wysiwyg = {
    _tinymce: function() {
        var $tinymce = '#wysiwyg_tinymces';
        if($($tinymce).length) {
            tinymce.init({
                skin_url: '<?php echo base_url().$this->data['asback']; ?>skins/tinymce/material_design',
                selector: "#wysiwyg_tinymces",
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            });
            
        }
    }
};
</script>
<?php
} elseif($plugins == 'plugins_terms_titipsewa') { 
?>
<?php echo $datatables;?>
<!--  preloaders functions -->
<script src="<?php echo base_url().$this->data['asback'];?>js/pages/components_preloaders.min.js"></script>

<?php echo $forms_advanced;?>
<!-- page specific plugins -->
<!-- tinymce -->
<script src="<?php echo base_url().$this->data['asbackbower']; ?>tinymce/tinymce.min.js"></script>


<script>
    $(function() {
    // tinymce
    altair_wysiwyg._tinymce();
    altair_wysiwyg._tinymces();
});

// wysiwyg editors
altair_wysiwyg = {
    _tinymce: function() {
        var $tinymce = '#wysiwyg_tinymce';
        if($($tinymce).length) {
            tinymce.init({
                skin_url: '<?php echo base_url().$this->data['asback']; ?>skins/tinymce/material_design',
                selector: "#wysiwyg_tinymce",
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            });
            
        }
    },
    _tinymces: function() {
        var $tinymce = '#wysiwyg_tinymces';
        if($($tinymce).length) {
            tinymce.init({
                skin_url: '<?php echo base_url().$this->data['asback']; ?>skins/tinymce/material_design',
                selector: "#wysiwyg_tinymces",
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            });
            
        }
    }
};
</script>
<?php
} elseif($plugins == 'plugins_create_rental_products') { 
?>

<?php echo $datatables;?>
<!--  preloaders functions -->
<script src="<?php echo base_url().$this->data['asback'];?>js/pages/components_preloaders.min.js"></script>

<?php
$ages = select_all_multiple_age();
?>
<script type="text/javascript">
$(function() {
    // advanced selects
    altair_form_adv.adv_selects();
});
altair_form_adv = {
    adv_selects: function() {
        $('#select_age').selectize({
            plugins: {
                'remove_button': {
                    label: ''
                }
            },
            options: [
            <?php foreach ($ages as $age) { ?>
                {class: 'agelist', id: <?php echo $age->idAGE;?>, title: '<?php echo $age->namaAGE;?>'},
            <?php } ?>
            ],
            optgroups: [
                {value: 'agelist', label: 'Daftar Umur'}
            ],
            optgroupField: 'class',
            maxItems: null,
            valueField: 'id',
            labelField: 'title',
            searchField: 'title',
            create: false,
            render: {
                option: function(data, escape) {
                    return  '<div class="option">' +
                                '<span class="title">' + escape(data.title) + '</span>' +
                            '</div>';
                },
                item: function(data, escape) {
                    return '<div class="item"><a href="' + escape(data.url) + '" target="_blank">' + escape(data.title) + '</a></div>';
                },
                optgroup_header: function(data, escape) {
                    return '<div class="optgroup-header">' + escape(data.label) + '</div>';
                }
            },
            onDropdownOpen: function($dropdown) {
                $dropdown
                    .hide()
                    .velocity('slideDown', {
                        begin: function() {
                            $dropdown.css({'margin-top':'0'})
                        },
                        duration: 200,
                        easing: easing_swiftOut
                    })
            },
            onDropdownClose: function($dropdown) {
                $dropdown
                    .show()
                    .velocity('slideUp', {
                        complete: function() {
                            $dropdown.css({'margin-top':''})
                        },
                        duration: 200,
                        easing: easing_swiftOut
                    })
            }
        });
    }
};
</script>
<!-- tinymce -->
<script src="<?php echo base_url().$this->data['asbackbower']; ?>tinymce/tinymce.min.js"></script>
<script>
    $(function() {
    // tinymce
    altair_wysiwyg._tinymce();
});

// wysiwyg editors
altair_wysiwyg = {
    _tinymce: function() {
        var $tinymce = '#wysiwyg_tinymce';
        if($($tinymce).length) {
            tinymce.init({
                skin_url: '<?php echo base_url().$this->data['asback']; ?>skins/tinymce/material_design',
                selector: "#wysiwyg_tinymce",
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            });
            
        }
    }
};
</script>
<?php
} elseif($plugins == 'plugins_create_why_data') { 
?>

<?php echo $datatables;?>
<!--  preloaders functions -->
<script src="<?php echo base_url().$this->data['asback'];?>js/pages/components_preloaders.min.js"></script>

<?php echo $forms_advanced;?>
<?php echo $forms_validation;?>
<script type="text/javascript">
    $('.multi-field-wrapper').each(function() {
        var $wrapper = $('.multi-fields', this);
        $(".add-field", $(this)).click(function(e) {
            $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
        });
        $('.multi-field .remove-field ', $wrapper).click(function() {
            if ($('.multi-field', $wrapper).length > 1)
                $(this).parents('.multi-field').remove();
        });
    });
</script>

<?php                   
}
?>
<script>
    $(function() {
        if(isHighDensity()) {
            $.getScript( "<?php echo base_url().$this->data['asback']; ?>js/custom/dense.min.js", function(data) {
                // enable hires images
                altair_helpers.retina_images();
            });
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