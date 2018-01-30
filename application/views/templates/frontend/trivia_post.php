<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<main>
    <section class="trivia-post">
        <div class="meta">
            <div class="image">
                <img src="<?php echo $gettrivia->imageTRIVIA;?>" alt="Admin">
            </div>
            <p class="author">by <a href="#">Administrator</a></p>
        </div>
        <div class="post">
            <h2><?php echo $gettrivia->titleTRIVIA;?></h2>
            <span class="date">
                <i class="fa fa-clock-o"></i> <?php echo date('d F Y', strtotime($gettrivia->createdateTRIVIA));?>
            </span>/ &nbsp;
            <span class="cat">
                <i class="fa fa-file-text-o"></i> <?php echo $gettrivia->namaCATTRIVIA;?>
            </span>
            <div class="main-post"><?php echo $gettrivia->descriptionTRIVIA;?>
            </div>
            <div class="share-post">
                <h4>Suka artikel ini?</h4>
                <p>Bagikan ke teman-teman kamu.</p>
                <ul>
                    <li><a href="javascript:void(0)" onclick="javascript:genericSocialShare('http://twitter.com/share?text=<?php echo $gettrivia->titleTRIVIA;?>&url=<?php echo base_url(uri_string());?>')"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="ShareFB"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="javascript:void(0)" onclick="javascript:genericSocialShare('https://plus.google.com/share?url=<?php echo base_url(uri_string());?>')"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="similar-post">
            <h4>Postingan Sejenis</h4>
            <div class="wrapper">
            <?php
                if(!empty($similartrivia)){
                    foreach ($similartrivia as $key => $sim) {
            ?>
                <div class="card">
                    <h4><?php echo $sim->titleTRIVIA;?></h4>
                    <span><i class="fa fa-clock-o"></i> <?php echo date('d F Y', strtotime($sim->createdateTRIVIA));?></span>
                    <p><?php echo word_limiter($sim->descriptionTRIVIA, 14);?></p>
                    <a href="<?php echo base_url();?>trivia/detail/<?php echo base64_encode($sim->idTRIVIA).'-'.seo_url($sim->titleTRIVIA);?>" class="btn-hoopla">Baca sekarang</a>
                </div>
            <?php } ?>
            <?php } ?>
            </div>
        </div>
    </section>
</main>
<script
  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
  crossorigin="anonymous"></script>
<script type="text/javascript">
    function genericSocialShare(url){
        window.open(url,'sharer','toolbar=0,status=0,width=648,height=395');
        return true;
    }

function createFBShareLink(FBVars) {
    // FBVars is app_id
    var url = 'http://www.facebook.com/dialog/feed?app_id='+FBVars+
    '&link=' + '<?php echo base_url(uri_string());?>' +
    '&picture=' + '<?php echo base_url().$this->data['asfront'];?>img/logo-web.png' +
    '&name=' + encodeURIComponent('<?php echo $gettrivia->titleTRIVIA;?>') +
    '&description=' + encodeURIComponent('<?php echo word_limiter($gettrivia->descriptionTRIVIA,8);?>') +
    '&redirect_uri=' + '<?php echo base_url(uri_string());?>' +
    '&display=popup';
    window.open(url,'feedDialog','toolbar=0,status=0,width=626,height=436');
}

$(".ShareFB").click(function(e) {
    e.preventDefault();
    createFBShareLink('1400972743334993');
});
</script>