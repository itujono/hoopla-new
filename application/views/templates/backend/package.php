<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$title1 = 'Buat Data Paket';
$actions = 'savepackage';
$controller = 'package';
if($getpackage->idPAKET != NULL){
 $title1 = 'Perbaharui Data Paket';
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
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">List Paket</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form Paket</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="number-order">No.</th>
                <th class="action-order">Action</th>
                <th>Gambar</th>
                <th>Featured</th>
                <th>Judul</th>
                <th>Created</th>
                <th>Updated</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th class="number-order">No.</th>
                <th class="action-order">Action</th>
                <th>Gambar</th>
                <th>Featured</th>
                <th>Judul</th>
                <th>Created</th>
                <th>Updated</th>
              </tr>
            </tfoot>
            <tbody>
              <?php
              if(!empty($listpackage)){
                foreach ($listpackage  as $key => $package) {
                  $id = encode($package->idPAKET);
                  if($package->featuredPAKET == 1){
                  $featured = '<span class="uk-badge uk-badge-notification uk-badge-primary">Featured Paket</span>';
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
                      $url1 = 'hooplaadmin/'.$controller.'/actiondelete_package/'.urlencode($id);
                      $url2 = 'hooplaadmin/'.$controller.'/index_package/'.urlencode($id);
                    ?>
                    <td class="">
                      <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg1; ?>', function(){ document.location.href='<?php echo site_url($url1);?>'; });"><i class="md-icon material-icons"><?php echo $icndel; ?></i></a>
                      <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg2; ?>', function(){ document.location.href='<?php echo site_url($url2);?>'; });"><i class="md-icon material-icons">&#xE254;</i></a>
                    </td>
                    <td><img class="img_thumb" src="<?php echo $package->imagePACKAGE;?>" alt="<?php echo $package->titlePAKET;?>"/></td>
                    <td><?php echo $featured; ?></td>
                    <td><?php echo $package->titlePAKET; ?></td>
                    <td><?php echo date('d F Y H:i', strtotime($package->createdatePAKET));?></td>
                    <td><?php echo date('d F Y H:i', strtotime($package->updatedatePAKET));?></td>
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
                <?php echo form_hidden('idPAKET',encode($getpackage->idPAKET),'hidden'); ?>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1">
                    <div class="md-card">
                      <div class="md-card-content">
                        <?php
                          if(!empty($getpackage->imagePACKAGE)){
                        ?>
                        <div class="uk-margin-bottom uk-text-center uk-position-relative">
                            <a href="#" class="uk-modal-close uk-close uk-close-alt uk-position-absolute" onclick="UIkit.modal.confirm('Apakah anda yakin akan menghapus gambar ini?', function(){ document.location.href='<?php echo base_url().$this->data['folBACKEND'].$controller."/deleteimgpackage/".encode($getpackage->idPAKET); ?>'; });"></a>
                            <img src="<?php echo $getpackage->imagePACKAGE;?>" alt="<?php echo $getpackage->titlePAKET;?>" class="img_medium"/>
                        </div>
                        <?php } else { ?>
                          <?php echo form_upload('imgPACKAGE','','class="md-input" required'); ?>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Judul</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="titlePAKET" autocomplete value="<?php echo $getpackage->titlePAKET;?>" required/>
                    <p class="text-red"><?php echo form_error('titlePAKET'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Valid Paket</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="validPAKET" autocomplete value="<?php echo $getpackage->validPAKET;?>" required/>
                    <p class="text-red"><?php echo form_error('validPAKET'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Deskripsi</label>
                    <br>
                    <textarea id="wysiwyg_tinymce" cols="30" rows="4" name="descPAKET" class="md-input label-fixed"><?php echo cetak($getpackage->descPAKET);?></textarea>
                    <p class="text-red"><?php echo form_error('descPAKET'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Tabel</label>
                    <br>
                    <textarea id="wysiwyg_tinymces" cols="30" rows="4" name="tablePAKET" class="md-input label-fixed"><?php echo cetak($getpackage->tablePAKET);?></textarea>
                    <p class="text-red"><?php echo form_error('tablePAKET'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Judul Benefit Paket</label>
                    <br>
                   <input type="text" class="md-input label-fixed" name="titlebenefitPAKET" autocomplete value="<?php echo $getpackage->titlebenefitPAKET;?>"/>
                    <p class="text-red"><?php echo form_error('titlebenefitPAKET'); ?></p>
                  </div>
                </div>
                <?php 
              $data_point_benefit = json_decode($getpackage->descbenefitPAKET,TRUE);
              if(!empty($data_point_benefit)){
              ?>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 multi-field-wrapper">
                    <button style="min-width: 49px !important; margin-left: 17px !important; padding-bottom: 10px;" type="button" class="md-btn md-btn-primary add-field"><i class="material-icons md-24">&#xE146;</i></button>
                    <div class="multi-fields">
                      <?php foreach ($data_point_benefit as $value) { ?>
                      <div class="uk-grid multi-field" data-uk-grid-margin>
                        <div class="uk-width-medium-1-5 uk-margin-top">
                          <div class="uk-input-group mt-m">
                            <span class="uk-input-group-addon remove-field">
                              <button type="button" style="min-width:1px; padding-bottom: 10px;" class="md-btn md-btn-danger"><i class="material-icons md-24">&#xE872;</i></button>
                            </span>
                          </div>
                        </div>
                        <div class="uk-width-medium-1-4 uk-margin-top">
                          <div class="uk-input-group">
                            <label class="uk-form-label"><b>Judul</b></label>
                            <label for="title_benefit[]"></label>
                            <input type="text" class="md-input" name="title_benefit[]" value="<?php echo $value[0];?>">
                          </div>
                        </div>
                        <div class="uk-width-medium-1-4 uk-margin-top">
                          <div class="uk-input-group">
                            <label class="uk-form-label"><b>Deskripsi</b></label>
                            <label for="desc_benefit[]"></label>
                            <textarea cols="30" rows="4" name="desc_benefit[]" class="md-input label-fixed"><?php echo $value[1];?></textarea>
                          </div>
                        </div>
                      </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <?php } else { ?>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 multi-field-wrapper">
                    <button style="min-width: 49px !important; margin-left: 17px !important; padding-bottom: 10px;" type="button" class="md-btn md-btn-primary add-field"><i class="material-icons md-24">&#xE146;</i></button>
                    <div class="multi-fields">
                      <div class="uk-grid multi-field" data-uk-grid-margin>
                        <div class="uk-width-medium-1-5 uk-margin-top">
                          <div class="uk-input-group mt-m">
                            <span class="uk-input-group-addon remove-field">
                              <button type="button" style="min-width:1px; padding-bottom: 10px;" class="md-btn md-btn-danger"><i class="material-icons md-24">&#xE872;</i></button>
                            </span>
                          </div>
                        </div>
                        <div class="uk-width-medium-1-4 uk-margin-top">
                          <div class="uk-input-group">
                            <label class="uk-form-label"><b>Judul</b></label>
                            <label for="title_benefit[]"></label>
                            <input type="text" class="md-input" name="title_benefit[]">
                          </div>
                        </div>
                        <div class="uk-width-medium-1-4 uk-margin-top">
                          <div class="uk-input-group">
                            <label class="uk-form-label"><b>Deskripsi</b></label>
                            <label for="desc_benefit[]"></label>
                            <textarea cols="30" rows="4" name="desc_benefit[]" class="md-input label-fixed"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } ?>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-3 uk-margin-top">
                    <label>Judul Tombol</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="titlebuttonPAKET" autocomplete value="<?php echo $getpackage->titlebuttonPAKET;?>" required/>
                    <p class="text-red"><?php echo form_error('titlebuttonPAKET'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-3 uk-margin-top">
                    <label>Link Button</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="linkbuttonPAKET" autocomplete value="<?php echo $getpackage->linkbuttonPAKET;?>" required/>
                    <p class="text-red"><?php echo form_error('linkbuttonPAKET'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-3 uk-margin-top">
                    <div class="parsley-row">
                      <?php
                        $checkdis= '';
                        if($getpackage->featuredPAKET == 1) $checkdis = 'checked' ;
                      ?>
                      <input type="checkbox" data-switchery <?php echo $checkdis; ?> data-switchery-size="large" data-switchery-color="#d32f2f" name="featuredPAKET" id="switch_demo_large">
                      <label for="switch_demo_large" class="inline-label"><b>Featured Paket</b></label>
                    </div>
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
