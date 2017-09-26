<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>404 - Oops! - Hoopla Toys Rent</title>
        <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/main.css">
        <link rel="stylesheet" href="https://unpkg.com/tippy.js@1.2.0/dist/tippy.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront'];?>css/tingle.min.css">
    </head>
    <body class="nobg">
        <div class="container" id="not-found">

            <header>
                <div class="top-panel"></div>
            </header>

            <main>
                <section class="fourth">
                    <div class="satelite"></div>
                    <div class="satelite two"></div>
                    <div class="captioner">
                        <div class="spaceman"></div>
                        <h3 class="wow zoomIn">404 - Oopsy!</h3>
                        <p class="mb10">Coba dicek lagi ketikannya, ya. Atau memang kamu lagi main kejauhan. Sebaiknya putar balik lagi, ya.</p>
                        <a href="<?php echo base_url();?>" class="btn-hoopla">Coba ke Home dulu</a>
                    </div>
                </section>
            </main>
        </div>


        <script src="<?php echo base_url().$this->data['asfront'];?>js/main.js"></script>
        <script src="https://unpkg.com/tippy.js@1.2.0/dist/tippy.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

        <script type="text/javascript">
            tippy('.social a', {
                followCursor: true,
                position: 'bottom'
            });
        </script>

        <script>
            new WOW().init();
        </script>
    </body>
</html>
