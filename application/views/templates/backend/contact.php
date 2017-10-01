<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="uk-width-medium-1-1">
  <h4 class="heading_a uk-margin-bottom">Daftar Pesan</h4>
  <div class="md-card">
    <div class="md-card-content">
      <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#tabs_4'}">
        <li class="uk-width-1-1 uk-active>"><a href="#">Daftar Pesan</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Isi Pesan</th>
                  <th>Waktu Kirim</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Isi Pesan</th>
                <th>Waktu Kirim</th>
              </tr>
            </tfoot>
            <tbody>
            <?php foreach ($contactlist  as $key => $contact) {
            ?>
             <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $contact->namaCONTACT; ?></td>
                <td><?php echo $contact->emailCONTACT; ?></td>
                <td><?php echo $contact->descriptionCONTACT; ?></td>
                <td><b><?php echo indonesian_date($contact->createdateCONTACT); ?></b></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </li>
      </ul>
    </div>
  </div>
</div>