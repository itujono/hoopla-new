<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="uk-width-medium-1-1">
  <h4 class="heading_a uk-margin-bottom">Daftar Titip Sewa</h4>
  <div class="md-card">
    <div class="md-card-content">
      <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#tabs_4'}">
        <li class="uk-width-1-1 uk-active>"><a href="#">Daftar Titip Sewa</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>No. Telp</th>
                  <th>Merek</th>
                  <th>Kondisi</th>
                  <th>Jenis</th>
                  <th>Dibuat</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No. Telp</th>
                <th>Merek</th>
                <th>Kondisi</th>
                <th>Jenis</th>
                <th>Dibuat</th>
              </tr>
            </tfoot>
            <tbody>
            <?php foreach ($titipsewalist  as $key => $tisew) {
              $kondisi = $tisew->kondisiTITIP;
              if($kondisi == 1)$kondisi = 'Baru';
              else $kondisi = 'Bekas';
            ?>
             <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $tisew->namaTITIP; ?></td>
                <td><a href="mailto:<?php echo $tisew->emailTITIP;?>?Subject=Hallo%20dari%20Hoopla%20Toys%20Rental" target="_top"><?php echo $tisew->emailTITIP;?></a></td>
                <td><?php echo $tisew->telpTITIP; ?></td>
                <td><?php echo $tisew->merekTITIP; ?></td>
                <td><?php echo $kondisi; ?></td>
                <td><?php echo $tisew->tipeTITIP; ?></td>
                <td><b><?php echo indonesian_date($tisew->createdateTITIP); ?></b></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </li>
      </ul>
    </div>
  </div>
</div>