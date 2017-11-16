<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
    $why = selectall_why_only_one();
    $title1 = $why->titleWHY;
    $desc1 = $why->descWHY;
    $point = $why->pointWHY;
    $title2 = $why->title2WHY;
    $mustwhy1 = $why->mustWHY;
    $descmust1 = $why->descmustWHY;
    $mustwhy2 = $why->must2WHY;
    $descmust2 = $why->descmust2WHY;

    $map = directory_map('assets/upload/why/why-hoopla/pic-why-hoopla-'.folenc($why->idWHY), FALSE, TRUE);
    if(!empty($map)){
        $imagewhyHOOPLA = base_url() . 'assets/upload/why/why-hoopla/pic-why-hoopla-'.folenc($why->idWHY).'/'.$map[0];
    } else {
        $imagewhyHOOPLA = '';
    }

    $map2 = directory_map('assets/upload/why/must-why/pic-must-why-1-'.folenc($why->idWHY), FALSE, TRUE);
    if(!empty($map2)){
        $imagewhymustHOOPLA = base_url() . 'assets/upload/why/must-why/pic-must-why-1-'.folenc($why->idWHY).'/'.$map2[0];
    } else {
        $imagewhymustHOOPLA = '';
    }

    $map3 = directory_map('assets/upload/why/must-why-second/pic-must-why-2-'.folenc($why->idWHY), FALSE, TRUE);
    if(!empty($map3)){
        $imagewhymust2HOOPLA = base_url() . 'assets/upload/why/must-why-second/pic-must-why-2-'.folenc($why->idWHY).'/'.$map3[0];
    } else {
        $imagewhymust2HOOPLA = '';
    }
?>
<main>
    <section class="first">
        <div>
            <h2><?php echo $title1;?></h2>
            <p class="m0"><?php echo $desc1;?></p>
        </div>
        <div class="figure">
            <img src="<?php echo $imagewhyHOOPLA;?>" alt="<?php echo $title1;?>">
        </div>
    </section>
    <section class="why-hoopla">
    <?php
        if(!empty($point)){
            $decode_point = json_decode($point,TRUE);
            foreach ($decode_point as $key => $val) {
            if($key == 0){
                $class = 'class="wow bounceInUp"';
                $iclass = '<i class="fa fa-github-square"></i>' ;
            } else if($key == 1){
                $class = 'class="wow bounceInDown" data-wow-delay=".3s"';
                $iclass = '<i class="fa fa-futbol-o"></i>' ;
            } else {
                $class = 'class="wow bounceInRight" data-wow-delay=".6s"';
                $iclass = '<i class="fa fa-gift"></i>' ;
            }
    ?>
        <div <?php echo $class;?>>
            <span><?php echo $iclass;?></span>
            <h4><?php echo $val[0];?></h4>
            <p><?php echo $val[1];?></p>
        </div>
            <?php } ?>
        <?php } ?>
    </section>
    <section class="conclusion">
        <h2><?php echo $title2;?></h2>
        <div class="reasons">
            <div>
                <div class="figs">
                    <img src="<?php echo $imagewhymustHOOPLA;?>" alt="<?php echo $mustwhy1;?>">
                </div>
                <div class="texts">
                    <h3><?php echo $mustwhy1;?></h3>
                    <?php echo $descmust1;?>
                </div>
            </div>
            <div>
                <div class="figs">
                    <img src="<?php echo $imagewhymust2HOOPLA;?>" alt="<?php echo $mustwhy2;?>">
                </div>
                <div class="texts">
                    <h3><?php echo $mustwhy2;?></h3>
                    <?php echo $descmust2;?>
                </div>
            </div>
        </div>
    </section>
</main>