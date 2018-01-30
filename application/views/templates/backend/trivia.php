<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$title1 = 'Buat Data Trivia Baru';
$actions = 'savetrivia';
$controller = 'trivia';
if($gettrivia->idTRIVIA != NULL){
 $title1 = 'Perbaharui Data Trivia';
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
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">Daftar Trivia</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form Trivia</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No.</th>
                <th>Action</th>
                <th>Thumbnail</th>
                <th>Featured</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Created</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>Action</th>
                <th>Thumbnail</th>
                <th>Featured</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Created</th>
              </tr>
            </tfoot>
            <tbody>
              <?php 
              if(!empty($listtrivia)){
                foreach ($listtrivia  as $key => $trivia) { 
                  $id = encode($trivia->idTRIVIA);
                if($trivia->featuredTRIVIA == 1){
                  $featured = '<span class="uk-badge uk-badge-notification uk-badge-primary">Featured Post</span>';
                } else {
                  $featured = '-';
                }
              ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                    <?php
                    $icndel = '&#xE16C;';
                    $msg1 = 'Are you sure want to delete this data ?';
                    $msg2 = 'Are you sure want to change this data ?';
                    $url1 = 'hooplaadmin/'.$controller.'/actiondelete_trivia/'.urlencode($id);
                    $url2 = 'hooplaadmin/'.$controller.'/index_trivia/'.urlencode($id);
                    ?>
                    <td class="uk-text-center">
                      <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg1; ?>', function(){ document.location.href='<?php echo site_url($url1);?>'; });"><i class="md-icon material-icons"><?php echo $icndel; ?></i></a>
                      <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg2; ?>', function(){ document.location.href='<?php echo site_url($url2);?>'; });"><i class="md-icon material-icons">&#xE254;</i></a>
                    </td>
                    <td><img class="img_thumb" src="<?php echo $trivia->imageTRIVIA;?>" alt="<?php echo $trivia->titleTRIVIA;?>"/></td>
                    <td><?php echo $featured; ?></td>
                    <td><?php echo $trivia->titleTRIVIA; ?></td>
                    <td><?php echo $trivia->namaCATTRIVIA; ?></td>
                    <td><?php echo word_limiter($trivia->descriptionTRIVIA,8); ?></td>
                    <td><?php echo date('d F Y', strtotime($trivia->createdateTRIVIA));?></td>
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
              <form method="post" name="formrental" action="<?php echo $url;?>" id="form_validation" enctype="multipart/form-data">
                <?php echo form_hidden('idTRIVIA',encode($gettrivia->idTRIVIA),'hidden'); ?>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1">
                    <div class="md-card">
                      <div class="md-card-content">
                        <?php
                          if(!empty($gettrivia->imageTRIVIA)){
                        ?>
                        <div class="uk-margin-bottom uk-text-center uk-position-relative">
                            <a href="#" class="uk-modal-close uk-close uk-close-alt uk-position-absolute" onclick="UIkit.modal.confirm('Apakah anda yakin akan menghapus gambar ini?', function(){ document.location.href='<?php echo base_url().$this->data['folBACKEND'].$controller."/deleteimgtrivia/".encode($gettrivia->idTRIVIA); ?>'; });"></a>
                            <img src="<?php echo $gettrivia->imageTRIVIA;?>" alt="<?php echo $gettrivia->titleTRIVIA;?>" class="img_medium"/>
                        </div>
                        <?php } else { ?>
                          <?php echo form_upload('imgTRIVIA','','class="md-input" required'); ?>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-3 uk-margin-top">
                    <label>Judul</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="titleTRIVIA" autocomplete value="<?php echo cetak($gettrivia->titleTRIVIA);?>"/>
                    <p class="text-red"><?php echo form_error('titleTRIVIA'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-3 uk-margin-top">
                    <label>Kategori</label>
                    <br>
                    <?php echo form_dropdown('idCATTRIVIA', $getcattrivia, $gettrivia->idCATTRIVIA,'required id="select_demo_5" data-md-selectize data-md-selectize-bottom'); ?>
                    <p class="text-red"><?php echo form_error('idCATTRIVIA'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-3 uk-margin-top">
                  <div class="parsley-row">
                    <?php
                      $checkdis= '';
                      if($gettrivia->featuredTRIVIA == 1) $checkdis = 'checked';
                    ?>
                    <input type="checkbox" data-switchery <?php echo $checkdis; ?> data-switchery-size="large" data-switchery-color="#d32f2f" name="featuredTRIVIA" id="switch_demo_large">
                    <label for="switch_demo_large" class="inline-label"><b>Featured Post?</b></label>
                  </div>
                </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Deskripsi</label>
                    <br>
                    <textarea id="wysiwyg_tinymces" cols="30" rows="4" name="descriptionTRIVIA" class="md-input label-fixed"  required><?php echo cetak($gettrivia->descriptionTRIVIA);?></textarea>
                    <p class="text-red"><?php echo form_error('descriptionTRIVIA'); ?></p>
                  </div>
                </div>
                <div class="uk-width-medium-1-1 uk-margin-top">
                 <div class="uk-form-row">
                   <span class="uk-input-group-addon"><?php echo form_submit('submit', 'SAVE', 'class="md-btn md-btn-primary" id="show_preloader_md"'); ?></span>
                 </div>
               </div>
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