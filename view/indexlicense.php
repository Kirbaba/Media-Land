<?php foreach($licenses as $item){ ?>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
        <a href="<?= $item['link'] ?>">
            <div class="license__item">
                <img src="<?= $item['img'] ?>" alt="">
            </div>
        </a>
    </div>
<?php } ?>