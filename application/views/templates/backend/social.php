<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$title1 = 'Buat Data Social Media Baru';
$actions = 'savesocial';
$controller = 'social';
if($getsocial->idSOCIAL != NULL){
 $title1 = 'Perbaharui Data Social Media';
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
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">Daftar Social Media</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form Social Media</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No.</th>
                <th>Whatsapp</th>
                <th>Line</th>
                <th>Instagram</th>
                <th>Telepon</th>
                <th>Created</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>Whatsapp</th>
                <th>Line</th>
                <th>Instagram</th>
                <th>Telepon</th>
                <th>Created</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              <?php 
              if(!empty($listsocial)){
                foreach ($listsocial  as $key => $social) { 
                  $id = encode($social->idSOCIAL);
                  ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><?php echo $social->waSOCIAL; ?></td>
                    <td><?php echo $social->lineSOCIAL; ?></td>
                    <td><?php echo $social->igSOCIAL; ?></td>
                    <td><?php echo $social->telpSOCIAL; ?></td>
                    <td><?php echo date('d F Y H:i', strtotime($social->createdateSOCIAL));?></td>
                    <?php
                    $icndel = '&#xE16C;';
                    $msg1 = 'Are you sure want to delete this data ?';
                    $msg2 = 'Are you sure want to change this data ?';
                    $url1 = 'hooplaadmin/'.$controller.'/actiondelete/'.urlencode($id);
                    $url2 = 'hooplaadmin/'.$controller.'/index_social/'.urlencode($id);
                    ?>
                    <td class="uk-text-center">
                      <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg1; ?>', function(){ document.location.href='<?php echo site_url($url1);?>'; });"><i class="md-icon material-icons"><?php echo $icndel; ?></i></a>
                      <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg2; ?>', function(){ document.location.href='<?php echo site_url($url2);?>'; });"><i class="md-icon material-icons">&#xE254;</i></a>
                    </td>
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
              <form method="post" name="formrental" action="<?php echo $url;?>" id="form_validation">
                <?php echo form_hidden('idSOCIAL',encode($getsocial->idSOCIAL),'hidden'); ?>
                <div class="uk-grid" data-uk-grid-margin>

                  <div class="uk-width-medium-1-3 uk-margin-top">
                    <label>Whatsapp</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="waSOCIAL" autocomplete value="<?php echo cetak($getsocial->waSOCIAL);?>"/>
                    <p class="text-red"><?php echo form_error('waSOCIAL'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-3 uk-margin-top">
                    <label>Line</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="lineSOCIAL" autocomplete value="<?php echo cetak($getsocial->lineSOCIAL);?>"/>
                    <p class="text-red"><?php echo form_error('lineSOCIAL'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-3 uk-margin-top">
                    <label>Instagram</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="igSOCIAL" autocomplete value="<?php echo cetak($getsocial->igSOCIAL);?>"/>
                    <p class="text-red"><?php echo form_error('igSOCIAL'); ?></p>
                  </div>
                </div>

                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-3 uk-margin-top">
                    <label>Email Pertama</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="email1SOCIAL" autocomplete value="<?php echo cetak($getsocial->email1SOCIAL);?>"/>
                    <p class="text-red"><?php echo form_error('email1SOCIAL'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-3 uk-margin-top">
                    <label>Email Kedua</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="email2SOCIAL" autocomplete value="<?php echo cetak($getsocial->email2SOCIAL);?>"/>
                    <p class="text-red"><?php echo form_error('email2SOCIAL'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-3 uk-margin-top">
                    <label>Nomor Telepon</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="telpSOCIAL" autocomplete value="<?php echo cetak($getsocial->telpSOCIAL);?>"/>
                    <p class="text-red"><?php echo form_error('telpSOCIAL'); ?></p>
                  </div>
                </div>
                <?php 
                  if(!empty($getsocial->idSOCIAL)){
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