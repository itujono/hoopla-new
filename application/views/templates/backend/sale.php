<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    $title1 = 'Buat Data Barang Sale Baru';
    $actions = 'savesale';
    $controller = 'sale';
    if($getsale->idSALE != NULL){
       $title1 = 'Perbaharui Data Barang Sale';
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
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">Daftar Barang Sale</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form Barang Sale</a></li>
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
                <th>Created</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
            <?php 
            if(!empty($listsale)){
              foreach ($listsale  as $key => $sale) { 
              $id = encode($sale->idSALE);
            ?>
             <tr>
                <td><?php echo $key+1; ?></td>
                <td><img class="img_thumb" src="<?php echo $sale->imageSALE;?>" alt="<?php echo $sale->namaSALE;?>"/></td>
                <td><?php echo $sale->namaSALE; ?></td>
                <td><?php echo $sale->brandSALE; ?></td>
                <td><?php echo $sale->namaCATSALE; ?></td>
                <td>Rp. <?php echo number_format($sale->hargaSALE, 0,',','.'); ?></td>
                <td><?php echo date('d F Y', strtotime($sale->createdateSALE));?></td>
                <?php
                 $icndel = '&#xE16C;';
                  $msg1 = 'Are you sure want to delete this data <b>'.$sale->namaSALE.'</b> ?';
                  $msg2 = 'Are you sure want to change this data ' . ' <b>'.$sale->namaSALE.'</b> ?';
                  $url1 = 'hooplaadmin/'.$controller.'/actiondelete/'.urlencode($id);
                  $url2 = 'hooplaadmin/'.$controller.'/salelist/'.urlencode($id);
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
          <?php echo form_hidden('idSALE',encode($getsale->idSALE),'hidden'); ?>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-1">
                <div class="md-card">
                  <div class="md-card-content">
                    <?php
                      if(!empty($getsale->imageSALE)){
                    ?>
                    <div class="uk-margin-bottom uk-text-center uk-position-relative">
                        <a href="#" class="uk-modal-close uk-close uk-close-alt uk-position-absolute" onclick="UIkit.modal.confirm('Are you sure want to delete this picture?', function(){ document.location.href='<?php echo base_url().'hooplaadmin/'.$controller."/deleteimgsale/".encode($getsale->idSALE); ?>'; });"></a>
                        <img src="<?php echo $getsale->imageSALE;?>" alt="<?php echo $getsale->namaSALE;?>" class="img_medium"/>
                    </div>
                    <?php } else { ?>
                      <?php echo form_upload('imgSALE','','class="md-input" required'); ?>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-3 uk-margin-top">
                  <label>Nama Barang</label>
                  <br>
                  <input type="text" class="md-input label-fixed" name="namaSALE" autocomplete value="<?php echo $getsale->namaSALE;?>"/>
                  <p class="text-red"><?php echo form_error('namaSALE'); ?></p>
              </div>
              <div class="uk-width-medium-1-3 uk-margin-top">
                  <label>Brand Barang</label>
                  <br>
                  <input type="text" class="md-input label-fixed" name="brandSALE" autocomplete value="<?php echo $getsale->brandSALE;?>"/>
                  <p class="text-red"><?php echo form_error('brandSALE'); ?></p>
              </div>
              <div class="uk-width-medium-1-3 uk-margin-top">
                <label>Kategori Barang</label>
                <br>
                  <?php echo form_dropdown('idCATSALE', $getcatsale, $getsale->idCATSALE,'required id="select_demo_5" data-md-selectize data-md-selectize-bottom'); ?>
                  <p class="text-red"><?php echo form_error('idCATSALE'); ?></p>
              </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-1 uk-margin-top">
                  <label>Harga</label>
                  <br>
                  <?php
                        $price = '';
                        if(!empty($getsale->hargaSALE))$price = $getsale->hargaSALE;
                    ?>
                    <input class="md-input masked_input label-fixed" id="masked_currency" type="text" data-inputmask="'alias': 'currency', 'groupSeparator': '.', 'autoGroup': true, 'digits': 0, 'digitsOptional': false, 'prefix': 'Rp. ', 'placeholder': '0'" data-inputmask-showmaskonhover="false" name="hargaSALE" value="<?php echo $price;?>" required>
                  <p class="text-red"><?php echo form_error('hargaSALE'); ?></p>
              </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-1 uk-margin-top">
                <label>Deskripsi Barang</label>
                <br>
                <textarea cols="30" rows="4" name="descriptionSALE" class="md-input label-fixed"  required><?php echo $getsale->descriptionSALE;?></textarea>
                <p class="text-red"><?php echo form_error('descriptionSALE'); ?></p>
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