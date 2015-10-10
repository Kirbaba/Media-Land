<?php foreach($channels as $item){ ?>
    <div class="col-lg-17 col-sm-17 col-xs-6 col-md-17 ">
        <a href="<?= $item['link'] ?>">
            <div class="channels__item">
                <img src="<?= $item['img'] ?>" alt="">
            </div>
        </a>

    </div>
<?php } ?>