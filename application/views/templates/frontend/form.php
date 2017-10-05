<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main>
    <section>
        <div class="titip">
            <h3>Mau titip barang kamu di Hoopla?</h3>
            <p class="order-steps">
                Bingung mainan anak mulai menumpuk dan mulai tidak terawat? Yuuk titip sewa di Hoopla, kami akan merawat barang Anda dan membayar Anda.
            </p>

            <div class="terms">
                <h4>Syaratnya cukup mudah:</h4>
                <ul>
                    <li>Kondisi barang sesuai dengan standar mainan di Hoopla.</li>
                    <li>Diutamakan merek-merek yang premium dengan kondisi barang setidaknya 90% layak pakai.</li>
                    <li>Titip sewa dilandaskan dengan asas kepercayaan.</li>
                </ul>
            </div>
            <div class="how-to">
                <h4>Cara titip sewa:</h4>
                <ul>
                    <li>Kirim data barang (jenis, merek dan kondisi barang) beserta foto detail mainan melalui WA maupun Line.</li>
                    <li>Hoopla akan menghubungi anda jika barang yang diajukan sesuai dengan standar dan kriteria Hoopla.</li>
                    <li>Barang akan diantarkan langsung ke alamat Hoopla dalam keadaan bersih untuk dilakukan cek fisik barang secara langsung.</li>
                    <li>Anda akan menandatangani Kontrak Titip Sewa dengan Hoopla (ditandatangani di atas materai 6000).</li>
                    <li>Barang yang dititip akan masuk ke dalam Instagram dan Website Hoopla maksimal 3 hari setelah Kontrak Titip Sewa ditandatangani.</li>
                    <li>Setelah Kontrak ditandatangani, barang yang di titip sewa akan berada dalam kepemilikan sementara Hoopla.</li>
                    <li>Hoopla akan merawat barang yang dititip sewakan dengan sebaik-baiknya, namun Hoopla tidak bertanggung jawab jika kerusakan ditimbulkan oleh Penyewa.</li>
                    <li>Anda akan menerima laporan barang pada tanggal 1 (satu) setiap bulannya.</li>
                    <li>Jika dalam waktu 3 (tiga) bulan barang yang dititip tidak tersewa, maka Hoopla akan mengevaluasi dan berhak mengembalikan barang tersebut kepada Anda sebelum jangka waktu Kontrak berakhir.</li>
                </ul>
            </div>
            <form class="titip-sewa form-control" action="<?php echo base_url();?>form/submit_titipsewa" method="post" id="form-titip_sewa">
                <div class="title">
                    <h4>Formulir Titip Sewa</h4>
                    Harap diisi dan dibaca kembali dengan seksama setiap info yang diinput.
                </div>
                <div class="form-group">
                    <label for="name">Nama kamu</label>
                    <input type="text" name="namaTITIP" value="" placeholder="Nama lengkap kamu" required>
                    <span style="color: red;"><?php echo form_error('namaTITIP'); ?></span>
                </div>
                <div class="form-group">
                    <label for="email">Email kamu</label>
                    <input type="email" name="emailTITIP" value="" placeholder="Email address kamu" required>
                    <span style="color: red;"><?php echo form_error('emailTITIP'); ?></span>
                </div>
                <div class="form-group">
                    <label for="phone">Nomor telepon</label>
                    <input type="tel" name="telpTITIP" value="" placeholder="Atau nomor handphone kamu" required>
                    <span style="color: red;"><?php echo form_error('telpTITIP'); ?></span>
                </div>
                <div class="form-group">
                    <label for="brand">Nama/merk barang</label>
                    <input type="text" name="merekTITIP" value="" placeholder="Misal: Nuna, Ergobaby, Comotomo, dll..." required>
                    <span style="color: red;"><?php echo form_error('merekTITIP'); ?></span>
                </div>
                <div class="inline">
                    <div class="form-group">
                        <label for="condition">Kondisi</label>
                        <select name="kondisiTITIP" required="required">
                            <option value="Baru">Baru</option>
                            <option value="Bekas">Bekas</option>
                        </select>
                        <span style="color: red;"><?php echo form_error('kondisiTITIP'); ?></span>
                    </div>
                    <div class="form-group">
                        <select name="tipeTITIP" required="required">
                            <option value="Mainan">Mainan</option>
                            <option value="Accessories">Accessories</option>
                            <option value="Perlengkapan">Perlengkapan</option>
                            <option value="Pakaian/Fashion">Pakaian/Fashion</option>
                            <option value="Tidak tahu">Tidak tau</option>
                            <span style="color: red;"><?php echo form_error('tipeTITIP'); ?></span>
                        </select>
                    </div>
                </div>
                <div class="disclaimer">
                    <input type="checkbox" name="syaratTITIP" value="agree" id="tc-check" required="required">
                    <p id="tc-read">Saya sudah membaca <a href="<?php echo base_url();?>terms" class="coolgreen">Syarat &amp; Ketentuan</a> yang telah dibuat oleh pihak Hoopla Rent Toys, dan saya memahami keseluruhan isinya.</p>
                    <span style="color: red;"><?php echo form_error('syaratTITIP'); ?></span>
                </div>
                <button type="submit" name="button" class="btn-hoopla">Oke, submit</button>
            </form>
        </div>
    </section>
</main>

<aside class="sidebar">
    <div class="promo-sidebar wow bounceInUp" data-wow-delay="1.3s">
        <div class="bg">
            <h3>How to order?</h3>
            <a href="#" class="btn-hoopla" id="btn-order">Read here</a>
        </div>
    </div>
    <div class="promo-sidebar wow bounceInRight">
        <div class="bg" style="background: url(<?php echo base_url().$this->data['asfront'];?>img/kids.jpg)">
            <h3>Mau titip sewa di Hoopla?</h3>
            <a href="#" class="btn-hoopla" id="btn-titip">Klik di sini</a>
        </div>
    </div>
    <div class="cta-sidebar wow bounceInLeft" data-wow-delay="1.3s">
        <div>
            <h3><small class="coolgreen">Masih bingung?</small> Halo-in kami aja.</h3>
            <i class="fa fa-phone-square"></i> 0778 325 253
        </div>
    </div>
</aside>