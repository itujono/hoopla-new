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
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">Daftar Barang Rental</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form Barang Rental</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                  <th>No.</th>
                  <th>Gambar.</th>
                  <th>Nama Barang</th>
                  <th>Brand Barang</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th>Durasi</th>
                  <th>Created</th>
                  <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>Gambar.</th>
                <th>Nama Barang</th>
                <th>Brand Barang</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Durasi</th>
                <th>Created</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
            <?php 
            if(!empty($listrental)){
              foreach ($listrental  as $key => $rental) { 
              $id = encode($rental->idRENTAL);
            ?>
             <tr>
                <td><?php echo $key+1; ?></td>
                <td><img class="img_thumb" src="<?php echo $rental->imageRENTAL;?>" alt="<?php echo $rental->namaRENTAL;?>"/></td>
                <td><?php echo $rental->namaRENTAL; ?></td>
                <td><?php echo $rental->brandRENTAL; ?></td>
                <td><?php echo $rental->namaCATEGORY; ?></td>
                <td>Rp. <?php echo number_format($rental->hargaRENTAL, 0,',','.'); ?></td>
                <td><?php echo $rental->durasiRENTAL;?></td>
                <td><?php echo date('d F Y', strtotime($rental->createdateRENTAL));?></td>
                <?php
                 $icndel = '&#xE16C;';
                  $msg1 = 'Are you sure want to delete this data <b>'.$rental->namaRENTAL.'</b> ?';
                  $msg2 = 'Are you sure want to change this data ' . ' <b>'.$rental->namaRENTAL.'</b> ?';
                  $url1 = 'hooplaadmin/'.$controller.'/actiondelete/'.urlencode($id);
                  $url2 = 'hooplaadmin/'.$controller.'/rentallist/'.urlencode($id);
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
          <form method="post" name="formrental" action="<?php echo $url;?>" enctype="multipart/form-data" id="form_validation">
          <?php echo form_hidden('idRENTAL',encode($getrental->idRENTAL),'hidden'); ?>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-1">
                <div class="md-card">
                  <div class="md-card-content">
                    <?php
                      if(!empty($getrental->imageRENTAL)){
                    ?>
                    <div class="uk-margin-bottom uk-text-center uk-position-relative">
                        <a href="#" class="uk-modal-close uk-close uk-close-alt uk-position-absolute" onclick="UIkit.modal.confirm('Are you sure want to delete this picture?', function(){ document.location.href='<?php echo base_url().'hooplaadmin/'.$controller."/deleteimgrental/".encode($getrental->idRENTAL); ?>'; });"></a>
                        <img src="<?php echo $getrental->imageRENTAL;?>" alt="<?php echo $getrental->namaRENTAL;?>" class="img_medium"/>
                    </div>
                    <?php } else { ?>
                      <?php echo form_upload('imgRENTAL','','class="md-input" required'); ?>
                    <?php } ?>
                  </div>
                </div>
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
                  <input type="text" class="md-input label-fixed" name="brandRENTAL" autocomplete value="<?php echo $getrental->brandRENTAL;?>"/>
                  <p class="text-red"><?php echo form_error('brandRENTAL'); ?></p>
              </div>
              <div class="uk-width-medium-1-3 uk-margin-top">
                <label>Kategori Barang</label>
                <br>
                  <?php echo form_dropdown('idCATEGORY', $getcategory, $getrental->idCATEGORY,'required id="select_demo_5" data-md-selectize data-md-selectize-bottom'); ?>
                  <p class="text-red"><?php echo form_error('idCATEGORY'); ?></p>
              </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-2 uk-margin-top">
                  <label>Harga</label>
                  <br>
                  <?php
                        $price = '';
                        if(!empty($getrental->hargaRENTAL))$price = $getrental->hargaRENTAL;
                    ?>
                    <input class="md-input masked_input label-fixed" id="masked_currency" type="text" data-inputmask="'alias': 'currency', 'groupSeparator': '.', 'autoGroup': true, 'digits': 0, 'digitsOptional': false, 'prefix': 'Rp. ', 'placeholder': '0'" data-inputmask-showmaskonhover="false" name="hargaRENTAL" value="<?php echo $price;?>" required>
                  <p class="text-red"><?php echo form_error('hargaRENTAL'); ?></p>
              </div>
              <div class="uk-width-medium-1-2 uk-margin-top">
                  <label>Durasi Rental</label>
                  <br>
                  <input type="text" class="md-input label-fixed" name="durasiRENTAL" autocomplete value="<?php echo $getrental->durasiRENTAL;?>" required/>
                  <p class="text-red"><?php echo form_error('durasiRENTAL'); ?></p>
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