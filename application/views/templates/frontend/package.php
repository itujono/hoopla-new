<main>
<?php 
    if(!empty($listpackage)){
        foreach ($listpackage as $key => $pac) {
?>
    <section>
        <div class="discount-item">
            <div class="title"><?php echo $pac->titlePAKET;?></div>
            <div class="validity">Valid sampai <?php echo $pac->validPAKET;?></div>
            <div class="figure">
                <img src="<?php echo $pac->imagePACKAGE;?>" alt="<?php echo $pac->titlePAKET;?>">
            </div>
           <?php echo $pac->descPAKET;
           if(!empty($pac->tablePAKET)){ 
           ?>
            <div class="table-comparison">
                <?php echo $pac->tablePAKET;?>
            </div>
            <?php } 
                if(!empty($pac->titlebenefitPAKET)){
            ?>
            <div class="description"> <!-- sebelumnya benefits -->
            </div>
            <?php } ?>
            <a href="<?php echo $pac->linkbuttonPAKET;?>" class="btn-hoopla"><?php echo $pac->titlebuttonPAKET;?></a>
        </div>
    </section>
<?php } ?>
<?php } ?>
</main>