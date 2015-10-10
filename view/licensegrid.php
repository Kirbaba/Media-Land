<?php foreach($licenses as $item){ ?>
<li class="list-group-item" data-num="<?= $item['id'] ?>">
    <div class="row">
        <div class="col-lg-5">
            <img src="<?= $item['img'] ?>" alt="" class="license-img media">
            <button class="btn btn-info media-upload"><span class="glyphicon glyphicon-picture"> Выбрать изображение</span></button>
            <input type="hidden" class="media-img" name="license-img" value="<?= $item['img'] ?>">
        </div>
        <div class="col-lg-5">
            <input type="text" placeholder="Ссылка на лицензиара" name="license-link" value="<?= $item['link'] ?>">
        </div>
        <div class="col-lg-1">
            <button class="btn btn-success save-license"><span class="glyphicon glyphicon-floppy-disk"></span></button>
        </div>
        <div class="col-lg-1">
            <?php if ($item['id'] != 1) { ?>
                <button class="btn btn-danger del-license" data-num="<?= $item['id'] ?>"><span class="glyphicon glyphicon-trash"></span></button>
            <?php } ?>
        </div>
    </div>
</li>
<?php } ?>