<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 class="modal-title" id="myModalLabel"><?= $product->post_title; ?></h3>
</div>
<div class="modal-body">
    <div class="row">
        <p class="modal-body-content"><?= get_the_post_thumbnail($product->ID, 'full'); ?>
        <?= $product->post_content; ?></p>
    </div>
</div>