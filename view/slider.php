<div class="container-fluid">
    <div class="row">
        <div class="responsive">
            <?php
            foreach ($slider as $slide) :
            ?>
                <div class="slideItem">
                    <img src="<?=$slide['img']?>" alt="" class="sliderImg">

                        <?php
                        if(!empty($slide['title'])):
                        ?>
                            <div class="header__slidedescription">
                                <h2><?=$slide['title']?></h2>
                                <p><?=$slide['descr']?></p>
                            </div>
                        <?php
                        endif
                        ?>

                </div>
            <?php
            endforeach
            ?>
        </div>
    </div>
</div>