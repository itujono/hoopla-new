<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$title1 = 'Buat Data Slider Baru';
$actions = 'saveslider';
$controller = 'slider';
if($getslider->idSLIDER != NULL){
 $title1 = 'Perbaharui Data Slider';
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
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">Daftar Slider</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form Slider</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No.</th>
                <th>Action</th>
                <th>Thumbnail</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Created</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>Action</th>
                <th>Thumbnail</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Created</th>
              </tr>
            </tfoot>
            <tbody>
              <?php 
              if(!empty($listslider)){
                foreach ($listslider  as $key => $slider) { 
                  $id = encode($slider->idSLIDER);
                  ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                    <?php
                    $icndel = '&#xE16C;';
                    $msg1 = 'Are you sure want to delete this data ?';
                    $msg2 = 'Are you sure want to change this data ?';
                    $url1 = 'hooplaadmin/'.$controller.'/actiondelete_slider/'.urlencode($id);
                    $url2 = 'hooplaadmin/'.$controller.'/index_slider/'.urlencode($id);
                    ?>
                    <td class="uk-text-center">
                      <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg1; ?>', function(){ document.location.href='<?php echo site_url($url1);?>'; });"><i class="md-icon material-icons"><?php echo $icndel; ?></i></a>
                      <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg2; ?>', function(){ document.location.href='<?php echo site_url($url2);?>'; });"><i class="md-icon material-icons">&#xE254;</i></a>
                    </td>
                    <td><img class="img_thumb" src="<?php echo $slider->imageSLIDER;?>" alt="<?php echo $slider->titleSLIDER;?>"/></td>
                    <td><?php echo $slider->titleSLIDER; ?></td>
                    <td><?php echo $slider->descSLIDER; ?></td>
                    <td><?php echo date('d F Y', strtotime($slider->createdateSLIDER));?></td>
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
                <?php echo form_hidden('idSLIDER',encode($getslider->idSLIDER),'hidden'); ?>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1">
                    <div class="md-card">
                      <div class="md-card-content">
                        <?php
                          if(!empty($getslider->imageSLIDER)){
                        ?>
                        <div class="uk-margin-bottom uk-text-center uk-position-relative">
                            <a href="#" class="uk-modal-close uk-close uk-close-alt uk-position-absolute" onclick="UIkit.modal.confirm('Apakah anda yakin akan menghapus gambar ini?', function(){ document.location.href='<?php echo base_url().$this->data['folBACKEND'].$controller."/deleteimgslider/".encode($getslider->idSLIDER); ?>'; });"></a>
                            <img src="<?php echo $getslider->imageSLIDER;?>" alt="<?php echo $getslider->titleSLIDER;?>" class="img_medium"/>
                        </div>
                        <?php } else { ?>
                          <?php echo form_upload('imgSLIDER','','class="md-input" required'); ?>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Judul</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="titleSLIDER" autocomplete value="<?php echo cetak($getslider->titleSLIDER);?>" required/>
                    <p class="text-red"><?php echo form_error('titleSLIDER'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Link</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="linkSLIDER" autocomplete value="<?php echo cetak($getslider->linkSLIDER);?>"/>
                    <p class="text-red"><?php echo form_error('linkSLIDER'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Deskripsi</label>
                    <br>
                    <textarea cols="30" rows="4" name="descSLIDER" class="md-input label-fixed"  required><?php echo cetak($getslider->descSLIDER);?></textarea>
                    <p class="text-red"><?php echo form_error('descSLIDER'); ?></p>
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