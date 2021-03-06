<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php if (!empty($message)){ ?>
  <div class="uk-alert uk-alert-<?php echo $message['type']; ?>" data-uk-alert>
    <a href="#" class="uk-alert-close uk-close"></a>
    <h4><?php echo $message['title']; ?></h4>
    <?php echo $message['text']; ?>
  </div>
<?php } ?>
<div class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>
    <div>
        <div class="md-card">
            <div class="md-card-content md-bg-orange-500">
                <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_orders peity_data"><?php echo $totalprodukrental;?>/100</span></div>
                <span style="color: white" class="uk-text-small">Produk Rental</span>
                <h2 style="color: white" class="uk-margin-remove"><span class="countUpMe">0<noscript><?php echo $totalprodukrental;?></noscript></span></h2>
            </div>
        </div>
    </div>
    <div>
        <div class="md-card">
            <div class="md-card-content md-bg-deep-purple-700">
                <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_orders peity_data"><?php echo $totalproduksale;?>/100</span></div>
                <span style="color: white" class=" uk-text-small ">Produk Sale</span>
                <h2 style="color: white" class="uk-margin-remove "><span class="countUpMe">0<noscript><?php echo $totalproduksale;?></noscript></span></h2>
            </div>
        </div>
    </div>
    <div>
        <div class="md-card">
            <div class="md-card-content md-bg-blue-500">
                <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_orders peity_data"><?php echo $totaltrivia;?>/100</span></div>
                <span style="color: white" class=" uk-text-small ">Total Post</span>
                <h2 style="color: white" class="uk-margin-remove "><span class="countUpMe">0<noscript><?php echo $totaltrivia;?></noscript></span></h2>
            </div>
        </div>
    </div>
    <div>
        <div class="md-card">
            <div class="md-card-content md-bg-pink-400">
                <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_orders peity_data"><?php echo $totalvisitor;?>/100</span></div>
                <span style="color: white" class="uk-text-small ">Pengunjung</span>
                <h2 style="color: white" class="uk-margin-remove "><span class="countUpMe">0<noscript><?php echo $totalvisitor;?></noscript></span></h2>
            </div>
        </div>
    </div>
</div>
<div class="uk-grid" data-uk-grid-margin>
    <div class="uk-width-large-1-1">
        <div class="md-card">
            <div class="md-card-content stats">
                <h4 class="heading_c uk-margin-bottom">Grafik Pengunjung</h4>
                <div id="chartist_line_area" class="chartist"></div>
            </div>
        </div>
    </div>
</div>
