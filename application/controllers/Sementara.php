<?php
                    $menus = array (array('','<i class="fa fa-home"></i>'), array('about','Tentang Hoopla'), array('why','Kenapa Hoopla'), array('product','Produk',selectall_category_active(),'namaCATEGORY'),array('terms','Cara Pemesanan'), array('sale','For Sale',selectall_category_sale_active(),'namaCATSALE'), array('form','Titip Sewa'), array('trivia','Trivia',selectall_category_trivia_active(),'namaTRIVIA'), array('contact','Hubungi Kami'));
                    // echo '<pre>';
                    // print_r($menus);
                    // exit;
                    foreach ($menus as $val) {
                        $url = $this->uri->segment(1);
                        $class = '';
                        if($url == $val[0])$class = 'active';
                ?>
                <li><a href="<?php echo base_url().$val[0];?>" class="<?php echo $class;?>"><?php echo $val[1];?></a></li>
                <?php if(!empty($val[2])){ ?>
                <li class="has-children">
                <a href="<?php echo base_url().$val[0];?>" class="<?php echo $class;?>"><?php echo $val[1];?></a>
                    <ul class="children">
                        <?php
                            foreach ($val[2] as $key => $cat) {
                        ?>
                        <li><a href="#"><?php echo $cat;?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <?php } ?>
                <?php } ?>