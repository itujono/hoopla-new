<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="uk-width-medium-1-1">
  <h4 class="heading_a uk-margin-bottom">Daftar Sewa Barang</h4>
  <div class="md-card">
    <div class="md-card-content">
      <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#tabs_4'}">
        <li class="uk-width-1-1 uk-active>"><a href="#">Daftar Sewa Barang</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No. Telp</th>
                  <th>Barang Sewa</th>
                  <th>Periode</th>
                  <th>Pengiriman</th>
                  <th>Permintaan Khusus</th>
                  <th>Dibuat</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>Barang Sewa</th>
                <th>Periode</th>
                <th>Pengiriman</th>
                <th>Permintaan Khusus</th>
                <th>Dibuat</th>
              </tr>
            </tfoot>
            <tbody>
            <?php 
            if(!empty($sewabaranglist)){
            foreach ($sewabaranglist  as $key => $sewa) {
            ?>
             <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $sewa->namaSEWA; ?></td>
                <td><?php echo $sewa->alamatSEWA; ?></td>
                <td><?php echo $sewa->telpSEWA; ?></td>
                <td><?php echo $sewa->barangSEWA; ?></td>
                <td><?php echo $sewa->periodeSEWA; ?></td>
                <td><?php echo $sewa->pengirimanSEWA; ?></td>
                <td><?php echo $sewa->permintaanSEWA; ?></td>
                <td><b><?php echo indonesian_date($sewa->createdateSEWA); ?></b></td>
              </tr>
            <?php } ?>
            <?php } ?>
            </tbody>
          </table>
        </li>
      </ul>
    </div>
  </div>
</div>