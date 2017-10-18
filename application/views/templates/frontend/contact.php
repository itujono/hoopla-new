<?php 
$social = selectall_social();
$wa = $social->waSOCIAL;
$line = $social->lineSOCIAL;
$ig = $social->igSOCIAL;
$emaail1 = $social->email1SOCIAL;
$emaail2 = $social->email2SOCIAL;
?>
<main>
    <section class="left">
        <h2>Simpan kontak kami. <br>Ntar pasti butuh. =)</h2>
        <div id="phone">
            <div>
                <span><i class="fa fa-mobile"></i></span>
            </div>
            <div>
                <h5>Whatsapp/SMS</h5>
                <p><?php echo $wa;?></p>
            </div>
        </div>
        <div id="line">
            <div>
                <span>LINE</span>
            </div>
            <div>
                <h5>Line</h5>
                <p><?php echo $line;?></p>
            </div>
        </div>
        <div id="ig">
            <div>
                <span><i class="fa fa-instagram"></i></span>
            </div>
            <div>
                <h5>Instagram</h5>
                <p><?php echo $ig;?></p>
            </div>
        </div>
        <div id="email">
            <div>
                <span><i class="fa fa-envelope"></i></span>
            </div>
            <div>
                <h5>Email</h5>
                <p><a href="mailto:<?php echo $emaail1;?>"><?php echo $emaail1;?></a> <br>
                    <a href="mailto:<?php echo $emaail2;?>"><?php echo $emaail2;?></a></p>
                </div>
            </div>
            <div class="cta-contact">
                <img src="<?php echo base_url().$this->data['asfront'];?>img/baby-calling.png" alt="On the phone">
            </div>
        </section>

        <section class="right">
            <h2>Atau hubungi kami langsung di sini...</h2>
            <?php if (!empty($message)){ ?>
                <div class="sent wow fadeIn">
                    <img
                        src="<?php echo base_url().$this->data['asfront'];?>img/spaceman.png"
                        alt="Form has been submitted"
                        class="wow bounceInUp" data-wow-delay=".5s">
                    <div class="wow bounceInUp">
                        <h3><?php echo $message['title']; ?></h3>
                        <p><?php echo $message['text']; ?></p>
                        <a href="<?php echo base_url();?>" class="btn-hoopla wow bounceInUp" data-wow-delay="1s">Kembali ke Home</a>
                    </div>
                </div>
            <?php } else { ?>
            <form class="form-control" action="<?php echo base_url();?>contact/savecontact" method="post">
                <div class="form-group">
                    <label for="name">Nama kamu <span>*</span></label>
                    <input type="text" placeholder="John Smith..." name="namaCONTACT" required="required">
                    <p class="error"><?php echo form_error('namaCONTACT'); ?></p>
                </div>
                <div class="form-group">
                    <label for="email">Email kamu <span>*</span></label>
                    <input type="text" placeholder="namaemail@email.com" name="emailCONTACT" required="required">
                    <p class="error"><?php echo form_error('emailCONTACT'); ?></p>
                </div>
                <div class="form-group">
                    <label for="message">Apa yang mau kamu sampaikan? <span>*</span></label>
                    <textarea rows="10" placeholder="Isi apapun pesan yang ingin kamu sampaikan..." name="descriptionCONTACT" required="required"></textarea>
                    <p class="error"><?php echo form_error('descriptionCONTACT'); ?></p>
                </div>
                <button type="submit" class="btn-hoopla">Okay, let's submit!</button>
            </form>
            <?php } ?>
        </section>
    </main>
