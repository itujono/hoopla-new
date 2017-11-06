<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    $title1 = 'Buat Data Barang Rental Baru';
    $actions = 'saverental';
    $controller = 'rental';
    if($getrental->idRENTAL != NULL){
       $title1 = 'Perbaharui Data Barang Rental';
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
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">List Barang (Rental)</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form Barang (Rental)</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                  <th>No.</th>
                  <th>Gambar</th>
                  <th>Nama</th>
                  <th>Brand</th>
                  <th>Type</th>
                  <th>Age</th>
                  <th>Harga per 2 Minggu</th>
                  <th>Harga per 4 Minggu</th>
                  <th>Created</th>
                  <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Brand</th>
                <th>Type</th>
                <th>Age</th>
                <th>Harga per 2 Minggu</th>
                <th>Harga per 4 Minggu</th>
                <th>Created</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
            <?php
            if(!empty($listrental)){
              foreach ($listrental  as $key => $rental) {
              $id = encode($rental->idRENTAL);
              $multiple_age = select_all_multiple_age($rental->idRENTAL);
            ?>
             <tr>
                <td><?php echo $key+1; ?></td>
                <td><img class="img_thumb" src="<?php echo $rental->imageRENTAL;?>" alt="<?php echo $rental->namaRENTAL;?>"/></td>
                <td><?php echo $rental->namaRENTAL; ?></td>
                <td><?php echo $rental->namaBRAND; ?></td>
                <td><?php echo $rental->namaTYPE; ?></td>
                <td>
                  <?php foreach ($multiple_age as $val) { ?>
                    (<?php echo $val->namaAGE;?>) - <a href="#" onclick="UIkit.modal.confirm('Are you sure want to delete this data?', function(){ document.location.href='<?php echo base_url().'hooplaadmin/'.$controller."/delete_join_age_rental/".urlencode(encode($val->idAGEJOINRENTAL)); ?>'; });">
                      <span><i class="fa fa-times">X</i></span>
                    </a> 
                  <?php } ?>
                </td>
                <td>Rp. <?php echo number_format($rental->harga2RENTAL, 0,',','.'); ?></td>
                <td>Rp. <?php echo number_format($rental->harga4RENTAL, 0,',','.'); ?></td>
                <td><?php echo date('d F Y', strtotime($rental->createdateRENTAL));?></td>
                <?php
                 $icndel = '&#xE16C;';
                if($rental->popularRENTAL == 1){
                  $id2 = '';
                  $icnpopular = '&#xE838;';
                  $tooltip = 'Popular Product';
                } else {
                  $id2 = '/1';
                  $icnpopular = '&#xE83A;';
                  $tooltip = 'Not Popular Product';
                }
                $msg1 = 'Are you sure want to delete this data <b>'.$rental->namaRENTAL.'</b> ?';
                $msg2 = 'Are you sure want to change this data ' . ' <b>'.$rental->namaRENTAL.'</b> ?';
                $msg3 = 'Are you sure want to change this popular item ' . ' <b>'.$rental->namaRENTAL.'</b> ?';
                $url1 = 'hooplaadmin/'.$controller.'/actiondelete/'.urlencode($id);
                $url2 = 'hooplaadmin/'.$controller.'/index_product/'.urlencode($id);
                $url3 = 'hooplaadmin/'.$controller.'/change_popular_product/'.urlencode($id).$id2;
                ?>
                <td class="uk-text-center">
                  <a href="#"  data-uk-tooltip title="<?php echo $tooltip;?>" onclick="UIkit.modal.confirm('<?php echo $msg3; ?>', function(){ document.location.href='<?php echo site_url($url3);?>'; });"><i class="md-icon material-icons"><?php echo $icnpopular; ?></i></a>
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
          <form method="post" name="formrental" action="<?php echo $url;?>" enctype="multipart/form-data" id="form_validation">
          <?php echo form_hidden('idRENTAL',encode($getrental->idRENTAL),'hidden'); ?>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-1">Product Rental Upload
                <?php echo form_upload('imgRENTAL[]','','class="md-input" multiple');?>
                <ul class="img-edit clearfix">
                  <?php 
                  if(!empty($getrental->map)){
                  foreach ($getrental->map as $key=> $value_img) { ?>
                    <li class="uk-position-relative">
                        <a href="#" class="uk-modal-close uk-close uk-close-alt uk-position-absolute" onclick="UIkit.modal.confirm('Are you sure want to delete this picture?', function(){ document.location.href='<?php echo base_url().'hooplaadmin/'.$controller."/deleteimgrental/".encode($getrental->idRENTAL).'/'.$getrental->imgs[$key]; ?>'; });"></a>
                          <img src="<?php echo $value_img; ?>" class="img_medium"/>
                    </li>
                  <?php } ?>
                  <?php } ?>
                </ul>
              </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-3 uk-margin-top">
                  <label>Nama Barang</label>
                  <br>
                  <input type="text" class="md-input label-fixed" name="namaRENTAL" autocomplete value="<?php echo $getrental->namaRENTAL;?>"/>
                  <p class="text-red"><?php echo form_error('namaRENTAL'); ?></p>
              </div>
              <div class="uk-width-medium-1-3 uk-margin-top">
                  <label>Brand Barang</label>
                  <br>
                  <?php echo form_dropdown('idBRAND', $getbrand, $getrental->idBRAND,'required id="select_demo_5" data-md-selectize data-md-selectize-bottom'); ?>
                  <p class="text-red"><?php echo form_error('idBRAND'); ?></p>
              </div>
              <div class="uk-width-medium-1-3 uk-margin-top">
                <label>Type Barang</label>
                <br>
                  <?php echo form_dropdown('idTYPE', $gettype, $getrental->idTYPE,'required id="select_demo_5" data-md-selectize data-md-selectize-bottom'); ?>
                  <p class="text-red"><?php echo form_error('idTYPE'); ?></p>
              </div>
              <!-- <div class="uk-width-medium-1-4 uk-margin-top">
                <label>Age/Umur Anak</label>
                <br>
                  <?php //echo form_dropdown('idAGE', $getage, $getrental->idAGE,'required id="select_demo_5" data-md-selectize data-md-selectize-bottom'); ?>
                  <p class="text-red"><?php //echo form_error('idAGE'); ?></p>
              </div> -->
            </div>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-1 uk-margin-top">
              <label>Age/Umur Anak (Multiple)</label>
              <br>
                <select id="select_age" name="idAGE[]" multiple required="required">
                <?php
                $getage = select_all_multiple_age($getrental->idRENTAL);
                
                if(!empty($getage)){
                  foreach ($getage as $key => $age) {
                ?>
                  <option value="<?php echo $age->idAGE;?>" selected><?php echo $age->namaAGE;?></option>
                  <?php } ?>
                <?php } ?>
                </select>
                <p class="text-red"><?php echo form_error('idAGE'); ?></p>
              </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-3 uk-margin-top">
                  <label>Harga per 2 Minggu</label>
                  <br>
                  <?php
                        $price = '';
                        if(!empty($getrental->harga2RENTAL))$price = $getrental->harga2RENTAL;
                    ?>
                    <input class="md-input masked_input label-fixed" id="masked_currency" type="text" data-inputmask="'alias': 'currency', 'groupSeparator': '.', 'autoGroup': true, 'digits': 0, 'digitsOptional': false, 'prefix': 'Rp. ', 'placeholder': '0'" data-inputmask-showmaskonhover="false" name="harga2RENTAL" value="<?php echo $price;?>" required>
                  <p class="text-red"><?php echo form_error('harga2RENTAL'); ?></p>
              </div>
              <div class="uk-width-medium-1-3 uk-margin-top">
                  <label>Harga per 4 Minggu</label>
                  <br>
                  <?php
                        $price = '';
                        if(!empty($getrental->harga4RENTAL))$price = $getrental->harga4RENTAL;
                    ?>
                    <input class="md-input masked_input label-fixed" id="masked_currency" type="text" data-inputmask="'alias': 'currency', 'groupSeparator': '.', 'autoGroup': true, 'digits': 0, 'digitsOptional': false, 'prefix': 'Rp. ', 'placeholder': '0'" data-inputmask-showmaskonhover="false" name="harga4RENTAL" value="<?php echo $price;?>" required>
                  <p class="text-red"><?php echo form_error('harga4RENTAL'); ?></p>
              </div>
              <div class="uk-width-medium-1-3 uk-margin-top">
                <div class="parsley-row">
                  <?php
                    $checkdis= '';
                    if($getrental->popularRENTAL == 1) $checkdis = 'checked' ;
                  ?>
                  <input type="checkbox" data-switchery <?php echo $checkdis; ?> data-switchery-size="large" data-switchery-color="#7cb342" name="popularRENTAL" id="switch_demo_large">
                  <label for="switch_demo_large" class="inline-label"><b>Popular Produk</b></label>
                </div>
              </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-1 uk-margin-top">
                <label>Deskripsi Barang</label>
                <br>
                <textarea cols="30" rows="4" name="descriptionRENTAL" class="md-input label-fixed"  required><?php echo $getrental->descriptionRENTAL;?></textarea>
                <p class="text-red"><?php echo form_error('descriptionRENTAL'); ?></p>
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
