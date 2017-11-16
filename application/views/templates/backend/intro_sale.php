<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$title1 = 'Buat Kata pembuka barang sale';
$actions = 'saveintro';
$controller = 'sale';
if($getintro->idINTROSALE != NULL){
 $title1 = 'Perbaharui Kata pembuka barang sale';
}
$url = base_url().'hooplaadmin/'.$controller.'/'.$actions;
?>
<div class="uk-width-medium-1-1">
  <h4 class="heading_a uk-margin-bottom"><?php echo $title1;?></h4>

  <?php if (!empty($message)){ ?>
  <div class="uk-alert uk-alert-<?php echo $message['type']; ?>" data-uk-alert>
    <a href="#" class="uk-alert-close uk-close"></a>
    <h4><?php echo $message['title']; ?></h4>
    <?php echo $message['text']; ?>
  </div>
  <?php } ?>

  <div class="md-card">
    <div class="md-card-content">
      <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#tabs_4'}">
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">List Kata</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form Kata</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="number-order">No.</th>
                <th class="action-order">Action</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Created</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th class="number-order">No.</th>
                <th class="action-order">Action</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Created</th>
              </tr>
            </tfoot>
            <tbody>
              <?php
              if(!empty($listintro)){
                foreach ($listintro  as $key => $intro) {
                  $id = encode($intro->idINTROSALE);
                  ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                     <?php
                      $icndel = '&#xE16C;';
                      $msg1 = 'Are you sure want to delete this data ?';
                      $msg2 = 'Are you sure want to change this data ?';
                      $url1 = 'hooplaadmin/'.$controller.'/actiondelete_intro/'.urlencode($id);
                      $url2 = 'hooplaadmin/'.$controller.'/index_intro/'.urlencode($id);
                    ?>
                    <td class="">
                      <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg1; ?>', function(){ document.location.href='<?php echo site_url($url1);?>'; });"><i class="md-icon material-icons"><?php echo $icndel; ?></i></a>
                      <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg2; ?>', function(){ document.location.href='<?php echo site_url($url2);?>'; });"><i class="md-icon material-icons">&#xE254;</i></a>
                    </td>
                    <td><?php echo $intro->titleINTROSALE; ?></td>
                    <td><?php echo word_limiter($intro->descINTROSALE,12); ?></td>
                    <td><?php echo date('d F Y H:i', strtotime($intro->createdateINTROSALE));?></td>
                  </tr>
                  <?php } ?>
                  <?php } ?>
                </tbody>
              </table>
            </li>
            <!-- END LIST SLIDER -->

            <!-- START FORM INPUT AREA -->
            <li>
              <h3 class="heading_a uk-margin-bottom">Buat data baru atau Perbaharui data</h3>
              <form method="post" name="formintro" action="<?php echo $url;?>" id="form_validation">
                <?php echo form_hidden('idINTROSALE',encode($getintro->idINTROSALE),'hidden'); ?>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Title</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="titleINTROSALE" autocomplete value="<?php echo $getintro->titleINTROSALE;?>" required/>
                    <p class="text-red"><?php echo form_error('titleINTROSALE'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Deskripsi</label>
                    <br>
                    <textarea cols="30" rows="4" name="descINTROSALE" class="md-input label-fixed"  required><?php echo $getintro->descINTROSALE;?></textarea>
                    <p class="text-red"><?php echo form_error('descINTROSALE'); ?></p>
                  </div>
                </div>
                <?php 
                  if(!empty($getintro->idINTROSALE)){
                ?>
                <div class="uk-width-medium-1-1 uk-margin-top">
                 <div class="uk-form-row">
                   <span class="uk-input-group-addon"><?php echo form_submit('submit', 'SAVE', 'class="md-btn md-btn-primary" id="show_preloader_md"'); ?></span>
                 </div>
               </div>
               <?php } ?>
             </div>
           </div>
         </div>
       </form>
     </li>
     <!-- END FORM INPUT AREA -->
   </ul>
 </div>
</div>
</div>
