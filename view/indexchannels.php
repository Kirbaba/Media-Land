<?php foreach($channels as $item){ ?>
    <div class="col-lg-17 col-md-6 col-sm-6 col-xs-6">
        <a href="<?= $item['link'] ?>">
            <div class="channels__item">
                <img src="<?= $item['img'] ?>" alt="">
            </div>
        </a>

    </div>
<?php } ?>