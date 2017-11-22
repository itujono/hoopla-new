<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$title1 = 'Buat Data Terms';
$actions = 'saveterms';
$controller = 'terms';
if($getterms->idTERMS != NULL){
 $title1 = 'Perbaharui Data Terms';
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
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">List Terms</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form Terms</a></li>
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
                <th>Updated</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th class="number-order">No.</th>
                <th class="action-order">Action</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Created</th>
                <th>Updated</th>
              </tr>
            </tfoot>
            <tbody>
              <?php
              if(!empty($listterms)){
                foreach ($listterms  as $key => $terms) {
                  $id = encode($terms->idTERMS);
                  ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                     <?php
                      $icndel = '&#xE16C;';
                      $msg1 = 'Are you sure want to delete this data ?';
                      $msg2 = 'Are you sure want to change this data ?';
                      $url1 = 'hooplaadmin/'.$controller.'/actiondelete_terms/'.urlencode($id);
                      $url2 = 'hooplaadmin/'.$controller.'/index_terms/'.urlencode($id);
                    ?>
                    <td class="">
                      <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg1; ?>', function(){ document.location.href='<?php echo site_url($url1);?>'; });"><i class="md-icon material-icons"><?php echo $icndel; ?></i></a>
                      <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg2; ?>', function(){ document.location.href='<?php echo site_url($url2);?>'; });"><i class="md-icon material-icons">&#xE254;</i></a>
                    </td>
                    <td><?php echo $terms->title1TERMS; ?></td>
                    <td><?php echo word_limiter($terms->desc1TERMS,12); ?></td>
                    <td><?php echo date('d F Y H:i', strtotime($terms->createdateTERMS));?></td>
                    <td><?php echo date('d F Y H:i', strtotime($terms->updatedateTERMS));?></td>
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
                <?php echo form_hidden('idTERMS',encode($getterms->idTERMS),'hidden'); ?>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Title</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="title1TERMS" autocomplete value="<?php echo $getterms->title1TERMS;?>" required/>
                    <p class="text-red"><?php echo form_error('title1TERMS'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Deskripsi</label>
                    <br>
                    <textarea cols="30" rows="4" name="desc1TERMS" class="md-input label-fixed"  required><?php echo $getterms->desc1TERMS;?></textarea>
                    <p class="text-red"><?php echo form_error('desc1TERMS'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Title 2</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="title2TERMS" autocomplete value="<?php echo $getterms->title2TERMS;?>" required/>
                    <p class="text-red"><?php echo form_error('title2TERMS'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Deskripsi 2</label>
                    <br>
                    <textarea cols="30" rows="4" name="desc2TERMS" class="md-input label-fixed"  required><?php echo $getterms->desc2TERMS;?></textarea>
                    <p class="text-red"><?php echo form_error('desc2TERMS'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Title 3</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="title3TERMS" autocomplete value="<?php echo $getterms->title3TERMS;?>" required/>
                    <p class="text-red"><?php echo form_error('title3TERMS'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Deskripsi 3</label>
                    <br>
                    <textarea cols="30" rows="4" name="desc3TERMS" class="md-input label-fixed"  required><?php echo $getterms->desc3TERMS;?></textarea>
                    <p class="text-red"><?php echo form_error('desc3TERMS'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Title 4</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="title4TERMS" autocomplete value="<?php echo $getterms->title4TERMS;?>" required/>
                    <p class="text-red"><?php echo form_error('title4TERMS'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Deskripsi 4</label>
                    <br>
                    <textarea cols="30" rows="4" name="desc4TERMS" class="md-input label-fixed"  required><?php echo $getterms->desc4TERMS;?></textarea>
                    <p class="text-red"><?php echo form_error('desc4TERMS'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Harga</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="harga1TERMS" autocomplete value="<?php echo $getterms->harga1TERMS;?>" required/>
                    <p class="text-red"><?php echo form_error('harga1TERMS'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Tempat</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="place1TERMS" autocomplete value="<?php echo $getterms->place1TERMS;?>" required/>
                    <p class="text-red"><?php echo form_error('place1TERMS'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Harga 2</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="harga2TERMS" autocomplete value="<?php echo $getterms->harga2TERMS;?>" required/>
                    <p class="text-red"><?php echo form_error('harga2TERMS'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Tempat 2</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="place2TERMS" autocomplete value="<?php echo $getterms->place2TERMS;?>" required/>
                    <p class="text-red"><?php echo form_error('place2TERMS'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Harga 3</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="harga3TERMS" autocomplete value="<?php echo $getterms->harga3TERMS;?>" required/>
                    <p class="text-red"><?php echo form_error('harga3TERMS'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Tempat 3</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="place3TERMS" autocomplete value="<?php echo $getterms->place3TERMS;?>" required/>
                    <p class="text-red"><?php echo form_error('place3TERMS'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Harga 4</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="harga4TERMS" autocomplete value="<?php echo $getterms->harga4TERMS;?>" required/>
                    <p class="text-red"><?php echo form_error('harga4TERMS'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Tempat 4</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="place4TERMS" autocomplete value="<?php echo $getterms->place4TERMS;?>" required/>
                    <p class="text-red"><?php echo form_error('place4TERMS'); ?></p>
                  </div>
                </div>
                <?php 
                  if(!empty($getterms->idTERMS)){
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
