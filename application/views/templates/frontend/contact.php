 <main>
    <section class="left">
        <h2>Simpan kontak kami. <br>Ntar pasti butuh. =)</h2>
        <div id="phone">
            <div>
                <span><i class="fa fa-mobile"></i></span>
            </div>
            <div>
                <h5>Whatsapp/SMS</h5>
                <p>085667651688</p>
            </div>
        </div>
        <div id="line">
            <div>
                <span>LINE</span>
            </div>
            <div>
                <h5>Line</h5>
                <p>hoopla_rentalmainan</p>
            </div>
        </div>
        <div id="ig">
            <div>
                <span><i class="fa fa-instagram"></i></span>
            </div>
            <div>
                <h5>Instagram</h5>
                <p>hoopla_rentalmainan</p>
            </div>
        </div>
        <div id="email">
            <div>
                <span><i class="fa fa-envelope"></i></span>
            </div>
            <div>
                <h5>Email</h5>
                <p><a href="mailto:order@hooplatoysrent.com">order@hooplatoyrental.com</a> <br>
                    <a href="#">info@hooplatoyrental.com</a></p>
                </div>
            </div>
            <div class="cta-contact">
                <img src="<?php echo base_url().$this->data['asfront'];?>img/baby-calling.png" alt="On the phone">
            </div>
        </section>

        <section class="right">
            <h2>Atau hubungi kami langsung di sini...</h2>
            <form class="form-control" action="<?php echo base_url();?>contact/savecontact" method="post">
                <label for="name">Nama kamu <span>*</span></label>
                <input type="text" placeholder="John Smith..." name="namaCONTACT" required="required">
                <p class="error"><?php echo form_error('namaCONTACT'); ?></p>

                <label for="email">Email kamu <span>*</span></label>
                <input type="text" placeholder="namaemail@email.com" name="emailCONTACT" required="required">
                <p class="error"><?php echo form_error('emailCONTACT'); ?></p>

                <label for="message">Apa yang mau kamu sampaikan? <span>*</span></label>
                <textarea rows="10" placeholder="Isi apapun pesan yang ingin kamu sampaikan..." name="descriptionCONTACT" required="required"></textarea>
                <p class="error"><?php echo form_error('descriptionCONTACT'); ?></p>

                <button type="submit" class="btn-hoopla">Okay, let's submit!</button>
            </form>
        </section>
    </main>