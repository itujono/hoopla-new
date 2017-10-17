<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$title1 = 'Buat Data About';
$actions = 'saveabout';
$controller = 'about';
if($getabout->idABOUT != NULL){
 $title1 = 'Perbaharui Data About';
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
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">List About</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form About</a></li>
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
              if(!empty($listabout)){
                foreach ($listabout  as $key => $about) {
                  $id = encode($about->idABOUT);
                  ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                     <?php
                      $icndel = '&#xE16C;';
                      $msg1 = 'Are you sure want to delete this data ?';
                      $msg2 = 'Are you sure want to change this data ?';
                      $url1 = 'hooplaadmin/'.$controller.'/actiondelete_about/'.urlencode($id);
                      $url2 = 'hooplaadmin/'.$controller.'/index_about/'.urlencode($id);
                    ?>
                    <td class="">
                      <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg1; ?>', function(){ document.location.href='<?php echo site_url($url1);?>'; });"><i class="md-icon material-icons"><?php echo $icndel; ?></i></a>
                      <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg2; ?>', function(){ document.location.href='<?php echo site_url($url2);?>'; });"><i class="md-icon material-icons">&#xE254;</i></a>
                    </td>
                    <td><?php echo $about->title1ABOUT; ?></td>
                    <td><?php echo word_limiter($about->desc1ABOUT,12); ?></td>
                    <td><?php echo date('d F Y H:i', strtotime($about->createdateABOUT));?></td>
                    <td><?php echo date('d F Y H:i', strtotime($about->updatedateABOUT));?></td>
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
                <?php echo form_hidden('idABOUT',encode($getabout->idABOUT),'hidden'); ?>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Title</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="title1ABOUT" autocomplete value="<?php echo $getabout->title1ABOUT;?>" required/>
                    <p class="text-red"><?php echo form_error('title1ABOUT'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Deskripsi</label>
                    <br>
                    <textarea cols="30" rows="4" name="desc1ABOUT" class="md-input label-fixed"  required><?php echo $getabout->desc1ABOUT;?></textarea>
                    <p class="text-red"><?php echo form_error('desc1ABOUT'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Title 2</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="title2ABOUT" autocomplete value="<?php echo $getabout->title2ABOUT;?>" required/>
                    <p class="text-red"><?php echo form_error('title2ABOUT'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Link 2</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="link2ABOUT" autocomplete value="<?php echo $getabout->link2ABOUT;?>"/>
                    <p class="text-red"><?php echo form_error('link2ABOUT'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Deskripsi 2</label>
                    <br>
                    <textarea cols="30" rows="4" name="desc2ABOUT" class="md-input label-fixed"  required><?php echo $getabout->desc2ABOUT;?></textarea>
                    <p class="text-red"><?php echo form_error('desc2ABOUT'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Title 3</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="title3ABOUT" autocomplete value="<?php echo $getabout->title3ABOUT;?>" required/>
                    <p class="text-red"><?php echo form_error('title3ABOUT'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Link 3</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="link3ABOUT" autocomplete value="<?php echo $getabout->link3ABOUT;?>"/>
                    <p class="text-red"><?php echo form_error('link3ABOUT'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Deskripsi 3</label>
                    <br>
                    <textarea cols="30" rows="4" name="desc3ABOUT" class="md-input label-fixed"  required><?php echo $getabout->desc3ABOUT;?></textarea>
                    <p class="text-red"><?php echo form_error('desc3ABOUT'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Title 4</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="title4ABOUT" autocomplete value="<?php echo $getabout->title4ABOUT;?>" required/>
                    <p class="text-red"><?php echo form_error('title4ABOUT'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Link 4</label>
                    <br>
                    <input type="text" class="md-input label-fixed" name="link4ABOUT" autocomplete value="<?php echo $getabout->link4ABOUT;?>"/>
                    <p class="text-red"><?php echo form_error('link4ABOUT'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Deskripsi 4</label>
                    <br>
                    <textarea cols="30" rows="4" name="desc4ABOUT" class="md-input label-fixed"  required><?php echo $getabout->desc4ABOUT;?></textarea>
                    <p class="text-red"><?php echo form_error('desc4ABOUT'); ?></p>
                  </div>
                </div>
                <?php 
                  if(!empty($getabout->idABOUT)){
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
