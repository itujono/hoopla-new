<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$title1 = 'Buat Data Kenapa Hoopla';
$actions = 'savewhy';
$controller = 'why';
if($getwhy->idWHY != NULL){
 $title1 = 'Perbaharui Data Kenapa Hoopla';
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
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">List Kenapa Hoopla</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form Kenapa Hoopla</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="number-order">No.</th>
                <th class="action-order">Action</th>
                <th>Judul</th>
                <th>Created</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th class="number-order">No.</th>
                <th class="action-order">Action</th>
                <th>Judul</th>
                <th>Created</th>
              </tr>
            </tfoot>
            <tbody>
              <?php
              if(!empty($listwhy)){
                foreach ($listwhy  as $key => $why) {
                  $id = encode($why->idWHY);
                  ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                     <?php
                      $icndel = '&#xE16C;';
                      $msg1 = 'Are you sure want to delete this data ?';
                      $msg2 = 'Are you sure want to change this data ?';
                      $url1 = 'hooplaadmin/'.$controller.'/actiondelete_why/'.urlencode($id);
                      $url2 = 'hooplaadmin/'.$controller.'/index_why/'.urlencode($id);
                    ?>
                    <td class="">
                      <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg1; ?>', function(){ document.location.href='<?php echo site_url($url1);?>'; });"><i class="md-icon material-icons"><?php echo $icndel; ?></i></a>
                      <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg2; ?>', function(){ document.location.href='<?php echo site_url($url2);?>'; });"><i class="md-icon material-icons">&#xE254;</i></a>
                    </td>
                    <td><?php echo $why->titleWHY; ?></td>
                    <td><?php echo date('d F Y H:i', strtotime($why->createdateWHY));?></td>
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
                <?php echo form_hidden('idWHY',encode($getwhy->idWHY),'hidden'); ?>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1">
                    <div class="md-card">
                      <div class="md-card-content">
                        <?php
                          if(!empty($getwhy->imagewhyHOOPLA)){
                        ?>
                        <div class="uk-margin-bottom uk-text-center uk-position-relative">
                            <a href="#" class="uk-modal-close uk-close uk-close-alt uk-position-absolute" onclick="UIkit.modal.confirm('Apakah anda yakin akan menghapus gambar ini di halaman utama?', function(){ document.location.href='<?php echo base_url().$this->data['folBACKEND'].$controller."/deleteimg_why/".encode($getwhy->idWHY); ?>'; });"></a>
                            <img src="<?php echo $getwhy->imagewhyHOOPLA;?>" alt="<?php echo $getwhy->titleWHY;?>" class="img_medium"/>
                        </div>
                        <?php } else { ?>
                          <?php echo form_upload('imgwhyHOOPLA','','class="md-input" required'); ?>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Title</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="titleWHY" autocomplete value="<?php echo $getwhy->titleWHY;?>" required/>
                    <p class="text-red"><?php echo form_error('titleWHY'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Deskripsi</label>
                    <br>
                    <textarea cols="30" rows="4" name="descWHY" class="md-input label-fixed" required><?php echo $getwhy->descWHY;?></textarea>
                    <p class="text-red"><?php echo form_error('descWHY'); ?></p>
                  </div>
                </div>
                
                <?php 
              $data_point_why = json_decode($getwhy->pointWHY,TRUE);
              if(!empty($data_point_why)){
              ?>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 multi-field-wrapper">
                    <button style="min-width: 49px !important; margin-left: 17px !important; padding-bottom: 10px;" type="button" class="md-btn md-btn-primary add-field"><i class="material-icons md-24">&#xE146;</i></button>
                    <div class="multi-fields">
                      <?php foreach ($data_point_why as $value) { ?>
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
                            <label for="pointWHY[]"></label>
                            <input type="text" class="md-input" name="pointWHY[]" value="<?php echo $value[0];?>">
                          </div>
                        </div>
                        <div class="uk-width-medium-1-4 uk-margin-top">
                          <div class="uk-input-group">
                            <label class="uk-form-label"><b>Deskripsi</b></label>
                            <label for="descpointWHY[]"></label>
                            <textarea cols="30" rows="4" name="descpointWHY[]" class="md-input label-fixed" required><?php echo $value[1];?></textarea>
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
                            <label for="pointWHY[]"></label>
                            <input type="text" class="md-input" name="pointWHY[]">
                          </div>
                        </div>
                        <div class="uk-width-medium-1-4 uk-margin-top">
                          <div class="uk-input-group">
                            <label class="uk-form-label"><b>Deskripsi</b></label>
                            <label for="descpointWHY[]"></label>
                            <textarea cols="30" rows="4" name="descpointWHY[]" class="md-input label-fixed" required></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php }  ?>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-2">
                    <div class="md-card">
                      <div class="md-card-content">
                        <?php
                          if(!empty($getwhy->imagewhymustHOOPLA)){
                        ?>
                        <div class="uk-margin-bottom uk-text-center uk-position-relative">
                            <a href="#" class="uk-modal-close uk-close uk-close-alt uk-position-absolute" onclick="UIkit.modal.confirm('Apakah anda yakin akan menghapus gambar ini di halaman utama?', function(){ document.location.href='<?php echo base_url().$this->data['folBACKEND'].$controller."/deleteimg_mustwhy/".encode($getwhy->idWHY); ?>'; });"></a>
                            <img src="<?php echo $getwhy->imagewhymustHOOPLA;?>" alt="<?php echo $getwhy->mustWHY;?>" class="img_medium"/>
                        </div>
                        <?php } else { ?>
                          <?php echo form_upload('imgmustwhyHOOPLA','','class="md-input" required'); ?>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                  <div class="uk-width-medium-1-2">
                    <div class="md-card">
                      <div class="md-card-content">
                        <?php
                          if(!empty($getwhy->imagewhymust2HOOPLA)){
                        ?>
                        <div class="uk-margin-bottom uk-text-center uk-position-relative">
                            <a href="#" class="uk-modal-close uk-close uk-close-alt uk-position-absolute" onclick="UIkit.modal.confirm('Apakah anda yakin akan menghapus gambar ini di halaman utama?', function(){ document.location.href='<?php echo base_url().$this->data['folBACKEND'].$controller."/deleteimg_mustwhy_second/".encode($getwhy->idWHY); ?>'; });"></a>
                            <img src="<?php echo $getwhy->imagewhymust2HOOPLA;?>" alt="<?php echo $getwhy->must2WHY;?>" class="img_medium"/>
                        </div>
                        <?php } else { ?>
                          <?php echo form_upload('imgmustwhy2HOOPLA','','class="md-input" required'); ?>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Title</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="title2WHY" autocomplete value="<?php echo $getwhy->title2WHY;?>" required/>
                    <p class="text-red"><?php echo form_error('title2WHY'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Title</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="mustWHY" autocomplete value="<?php echo $getwhy->mustWHY;?>" required/>
                    <p class="text-red"><?php echo form_error('mustWHY'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Deskripsi</label>
                    <br>
                    <textarea cols="30" rows="4" name="descmustWHY" class="md-input label-fixed" required><?php echo $getwhy->descmustWHY;?></textarea>
                    <p class="text-red"><?php echo form_error('descmustWHY'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Title</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="must2WHY" autocomplete value="<?php echo $getwhy->must2WHY;?>" required/>
                    <p class="text-red"><?php echo form_error('must2WHY'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Deskripsi</label>
                    <br>
                    <textarea cols="30" rows="4" name="descmust2WHY" class="md-input label-fixed" required><?php echo $getwhy->descmust2WHY;?></textarea>
                    <p class="text-red"><?php echo form_error('descmust2WHY'); ?></p>
                  </div>
                </div>
                <?php
                  if(!empty($getwhy->idWHY)){
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
