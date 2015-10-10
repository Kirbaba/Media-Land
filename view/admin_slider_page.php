<div class="adminSliderWrap" xmlns="http://www.w3.org/1999/html">
    <form role="form" method="post">
        <div class="form-group">
            <label for="titleSlide">Заголовок слайда</label>
            <input name="title" type="text" class="form-control" id="titleSlide" placeholder="">
        </div>
        <div class="form-group">
            <label for="textSlide">Описание слайда</label>
            <input name="text" type="text" class="form-control" id="textSlide" placeholder="">
        </div>
        <p><img class="custom_media_image" src="" alt="" style="width: 80px;"></p>
        <input id="image" class="custom_media_url form-control" type="hidden" name="attachment_url" placeholder="Генерируется автоматически">
        <button class="custom_media_upload btn btn-success">Выбрать изображение</button>
        <br><br>
        <button type="submit" class="btn btn-default">Отправить</button>
    </form>
    <br><br>
    <table class="table table-bordered">
    <tr>
        <th>Заголовок</th>
        <th>Описание</th>
        <th>Слайд</th>
        <th>Удалить</th>
    </tr>
    <?php
    foreach ($slider as $slide) :
    ?>
    <tr>
        <td>
            <?=$slide['title']?>
        </td>
        <td>
            <?=$slide['descr']?>
        </td>
        <td>
            <img src="<?= $slide['img'] ?>" alt="" width="100px">
        </td>
        <td>
            <a href="/wp-admin/admin.php?page=slider&del=<?=$slide['id']?>">Удалить</a>
        </td>
    </tr>
    <?php
    endforeach
    ?>
    </table>
</div>